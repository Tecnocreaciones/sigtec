'use strict';

mainApp.requires.push('sigtecModule');

// Declare app level module which depends on filters, and services
var sigtecModule = angular.module('sigtecModule', [
    'ngRoute',
    'sigtecModule.controllers',
    'notificationBarModule'
]).
        config(['$routeProvider', function($routeProvider) {
                $routeProvider.when('/index', {
                    controller: 'ShowCompanyList'
                });
                $routeProvider.otherwise({redirectTo: '/index'});
            }])
        ;
        
angular.module('sigtecModule.controllers', [])
  .controller('ShowCompanyList', ['$scope','$http','notificationBarService',function($scope,$http,notificationBarService) {
          $scope.data = {};
          $scope.limit = '40';
          
          var url = Routing.generate('coramer_sigtec_backend_company_index',{_format:'json'});
          return $http.get(url).success(function(data) {
            $scope.data = data;
            
        }).error(function(data){
            notificationBarService.getLoadStatus().error();
        });
          
  }])
  .controller('CompanyIndexController', function($scope,$http,notifyService) {
          $scope.itemValidateRif = function(url){
              $http.get(url).success(function(data){
                  notifyService.success(data.message);
                  $scope.tableParams.reload();
              }).error(function(data){
                  notifyService.error(data.message);
              });
          }
  })
  .controller('ReportTechnicalController',function($scope,$http,reportTechnicalManager,notificationBarService,notifyService,sfTranslator){
      var reportTechnical = {
              id: 0,
              professional_profile: {
                  quantity_professionals: 0,
                    quantity_technical: 0,
                    quantity_laborers: 0,
                    quantity_other: 0,
                    total: 0
              },
              description_area_company: {
                  area: {
                      
                  }
              }
          };
      $scope.reportTechnical = reportTechnical;
      $scope.form = {};
      
      $scope.reportTechnicalHelper = {
          professional_profile: {}
      };
      //Calcula el total de los empleados de la empresa
      $scope.reportTechnicalHelper.professional_profile.calculeTotal = function(){
          $scope.reportTechnical.professional_profile.total =
                 $scope.reportTechnical.professional_profile.quantity_professionals + 
                 $scope.reportTechnical.professional_profile.quantity_technical +
                 $scope.reportTechnical.professional_profile.quantity_laborers +
                 $scope.reportTechnical.professional_profile.quantity_other;
      };
      
      $scope.save = function(){
          var valid = jQuery('#form_company_report_technical').validationEngine('validate');
          if(valid){
              sendAjaxForm('form_company_report_technical');
          }
      };
      
      
      $scope.model = {
          detail_product_storage:{
              total_area: 5
          }
      };
      $scope.templateLoad = function(template){
          template.load = true;
          openFormModal();
      }
      $scope.addDetailsStorage = function(id){
          notificationBarService.getLoadStatus().loading();
          $scope.template = $scope.templates[0];
          //console.log($scope.template);
          if($scope.template.load == true){
              openFormModal();
          }
      };
      
      
      function cancelFormModal(){
          console.log('cancelFormModal');
      }
      function confirmFormModal(value){
             console.log('cancelFormModal');
            var valid = jQuery('#form_pop_up').validationEngine('validate');
            if(valid){
                return true;
            }
            $(this).getModalContentBlock().message(sfTranslator.trans('sigtec.form.errors.please_check_the_form_fields'), { append: false, classes: ['red-gradient'] });
            return false;
      }
      
      function openFormModal(){
          var area = $("#div-template");
          $.modal.showForm(area,confirmFormModal,cancelFormModal);
          notificationBarService.getLoadStatus().done();
      }
      
      function sendAjaxForm(idForm){
            notificationBarService.getLoadStatus().loading();
            var url = $('#'+idForm).attr('action');
            var formData = $('#'+idForm).serialize();
            $http({
                method  : 'POST',
                url     : url,
                data    : formData,
                headers : { 'Content-Type': 'application/x-www-form-urlencoded', 'X-Requested-With':'XMLHttpRequest' }  // set the headers so angular passing info as form data (not request payload)
            }).success(function(data){
                $scope.form.errors = {};
                notifyService.success(Translator.trans(data.message));
                notificationBarService.getLoadStatus().done();
            }).error(function(data){
                notifyService.error(Translator.trans(data.message));
                $scope.form.errors = {};
                if(data.errors){
                    if(data.errors.errors){
                        $.each(data.errors.errors,function(index,value){
                            notifyService.error(Translator.trans(value));
                        });
                    }
                    $scope.form.errors = data.errors.children;
                }
                notificationBarService.getLoadStatus().done();
            });
        }
      
      $scope.loadReportTechnical = function(id){
          reportTechnicalManager.setId(id);
          reportTechnicalManager.init($scope);
      };
      
      $scope.reportTechnicalHelper.professional_profile.calculeTotal();
  })
  .controller('VzlaEntityController',function($scope,$http,notificationBarService){
      $scope.model = {};
      $scope.model.state = $("#coramer_sigtec_companybundle_plant_state").val();
      $scope.model.city = 0;
      $scope.cities = {};
      $scope.getCities = function(selected){
          if($scope.model.state == undefined || $scope.model.state == ''){
              return ;
          }
          var url = Routing.generate('api_tecnocreaciones_vzla_entity_state_cities',{id: $scope.model.state});
          notificationBarService.getLoadStatus().loading();
          $http.get(url).success(function(data){
              var cities = [];
              jQuery.each(data,function(i,val){
                  cities[val.id] = val.description;
              });
              $scope.cities = cities;
              if(selected != undefined){
                  $scope.model.city = $scope.cities[selected];
              }
              notificationBarService.getLoadStatus().done();
          }).error(function(data){
              $scope.cities = {};
              notificationBarService.getLoadStatus().done();
          });
      }
      $scope.getCities(cityId);
  })
  ;
  
sigtecModule.factory('reportTechnicalManager',function($http,notificationBarService){
    var config = {
        routes:{
            show: 'coramer_sigtec_backend_company_report_technical_show',
            update: 'coramer_sigtec_backend_company_report_technical_update',
            delete: 'coramer_sigtec_backend_company_report_technical_delete',
            professional_profile: 'coramer_sigtec_backend_company_report_technical_professional_profile',
            form: {
                detail_product_storage: 'coramer_sigtec_backend_company_report_technical_detail_product_storage_form',
            }
        }
    };
    var data = {};
    var idReportTechnical = null;
    return {
        init: function($scope){
            notificationBarService.getLoadStatus().loading();
            var self = this;
            return $http.get(this.generateRoute(config.routes.show)).success(function(d){
                data = d;
                $scope.reportTechnical = d;
                $scope.templates =
                [ { name: 'formDetailProductStorage.html', url: self.getUrlFormDetailProductStorage(), load: false}
                   ];
                $scope.template = '';
                notificationBarService.getLoadStatus().done();
            });
        },
        getData: function(route){
            return $http.get(this.generateRoute(route)).success(function(d){
                data = d;
                return data;
            });
        },
        setId: function(i){
            idReportTechnical = i;
        },
        getId: function(){
            return idReportTechnical;
        },
        generateRoute: function(route,format){
            if(format == undefined){
                format = 'json';
            }
            return Routing.generate(route,{id:idReportTechnical,_format:format});
        },
        getProfessionalProfile: function(){
            return $http.get(this.generateRoute(config.routes.professional_profile)).success(function(d){
                
            });
        },
        getUrlFormDetailProductStorage: function() {
            return this.generateRoute(config.routes.form.detail_product_storage,'html');
        },
    }
});
