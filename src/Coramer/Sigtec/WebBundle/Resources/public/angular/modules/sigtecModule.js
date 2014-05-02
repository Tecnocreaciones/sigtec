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
      $scope.reportTechnical = {
              id: 0,
              professional_profile: {
                  quantity_professionals: 0,
                    quantity_technical: 0,
                    quantity_laborers: 0,
                    quantity_other: 0,
                    total: 0
              },
              description_area_company: {
                  id: '',
                  plants_description: {
                      
                  },
                  detail_product_storages: {
                      
                  }
              }
          };
      $scope.data = {
          materials: null,
          storages: null,
          separated_resins: null
      };
      $scope.form = {};
      
      $scope.reportTechnicalHelper = {
          professional_profile: {},
          form: {
              action: {
                  url: null
              }
          }
      };
      //Calcula el total de los empleados de la empresa
      $scope.reportTechnicalHelper.professional_profile.calculeTotal = function(){
          $scope.reportTechnical.professional_profile.total =
                 $scope.reportTechnical.professional_profile.quantity_professionals + 
                 $scope.reportTechnical.professional_profile.quantity_technical +
                 $scope.reportTechnical.professional_profile.quantity_laborers +
                 $scope.reportTechnical.professional_profile.quantity_other;
      };
      //Guarda los cambios actuales del formualrio
      $scope.save = function(){
          var valid = jQuery('#form_company_report_technical').validationEngine('validate');
          if(valid){
              sendAjaxForm('form_company_report_technical');
          }
      };
      
      $scope.itemDelete = function(url,callback){
        $.modal.confirm('¿'+ sfTranslator.trans('tecnocreaciones_vzla_government.question.delete') +'?', function()
        {
            $http.post(url,{_method:'DELETE'},{headers:{'X-Requested-With':'XMLHttpRequest'}}).success(function(data){
                $.each(data.message,function(index, value){
                    notify(value,'', {
                        system:		false,   
                        autoClose:		4000,
                        icon:               ConfApp.assetPath + 'bundles/tecnocreacionesvzlagovernment/template/developer/img/icons/icon-success.png',
                        iconOutside:        false,
                        closeButton:        true,
                        showCloseOnHover:	false,
                        groupSimilar:	true
                    });
                });
                if(callback){
                    callback.call(this);
                }
            });
        }, function(){},
        {
            textConfirm: sfTranslator.trans('tecnocreaciones_vzla_government.yes'),
            textCancel: sfTranslator.trans('tecnocreaciones_vzla_government.no')
        });
    }
      
      var defaultModel = {
          detail_product_storage:{
              id: null,
              material: { id: 0, description: '' },
              storage: null,
              separated_resin: null,
              total_area: 0,
              covered_area: 0,
          }
      };
      
      $scope.model = defaultModel;
      
      $scope.templateLoad = function(template){
          template.load = true;
          return openFormModal();
      }
      
      function openModalForm(){
          if($scope.template.load == true){
              openFormModal();
          }
      }
      
      $scope.addDetailsStorage = function(detailProductStorage){
          notificationBarService.getLoadStatus().loading();
          $scope.templates[0].parameterCallback = detailProductStorage;
          $scope.template = $scope.templates[0];
          openModalForm();
      };
      
    $scope.setDataDetailsStorage = function(detailProductStorage){
        if(detailProductStorage != undefined){
              $scope.reportTechnicalHelper.form.action.url = Routing.generate($scope.template.routes.update,{id: detailProductStorage.id});
              //$scope.model.detail_product_storage = detailProductStorage;
              $scope.model.detail_product_storage.material = $scope.data.materials[detailProductStorage.material.id];
              $scope.model.detail_product_storage.storage = $scope.data.storages[detailProductStorage.storage];
              $scope.model.detail_product_storage.separated_resin = $scope.data.separated_resins[detailProductStorage.separated_resin];
              $scope.model.detail_product_storage.total_area = detailProductStorage.total_area;
              $scope.model.detail_product_storage.covered_area = detailProductStorage.covered_area;
          }else{
              $scope.reportTechnicalHelper.form.action.url = Routing.generate($scope.template.routes.create,{id: $scope.reportTechnical.id});
              $scope.model.detail_product_storage = {
                        id: null,
                        material: { id: 0, description: '' },
                        storage: null,
                        separated_resin: null,
                        total_area: 0,
                        covered_area: 0,
                    };
          }
    }
      
      function cancelFormModal(){
          console.log('cancelFormModal');
      }
      function confirmFormModal(modal){
            var idForm = 'form_pop_up';
            var form = jQuery('#'+idForm);
            var valid = form.validationEngine('validate');
            var result = false;
            if(valid){
                var successCallback = $scope.template.reload;
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
                        notifyService.success(data.message);
                        if(successCallback){
                           successCallback.call(this);
                        }
                        notificationBarService.getLoadStatus().done();
                        modal.closeModal();
                    }).error(function(data){
                        if(data.message != undefined){
                            notifyService.error(Translator.trans(data.message));
                        }
                        if(data[0] != undefined && data[0].message != undefined){
                            notifyService.error(Translator.trans(data[0].message));
                        }
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
                    return false;
            }
            $(this).getModalContentBlock().message(sfTranslator.trans('sigtec.form.errors.please_check_the_form_fields'), { append: false, classes: ['red-gradient'] });
            return result;
      }
      
      function openFormModal(openCallback){
          var area = $("#div-template");
          $.modal.showForm(area,confirmFormModal,cancelFormModal);
          $.modal.preBuildShowForm(area);
          if($scope.template.loadCallback){
              $scope.template.loadCallback($scope.template.parameterCallback);
          }
          notificationBarService.getLoadStatus().done();
      }
      
      function sendAjaxForm(idForm,successCallback,errorCallback){
            notificationBarService.getLoadStatus().loading();
            
            var url = $('#'+idForm).attr('action');
            var formData = $('#'+idForm).serialize();
            var result = null;
            return $http({
                method  : 'POST',
                url     : url,
                data    : formData,
                headers : { 'Content-Type': 'application/x-www-form-urlencoded', 'X-Requested-With':'XMLHttpRequest' }  // set the headers so angular passing info as form data (not request payload)
            }).success(function(data){
                $scope.form.errors = {};
                notifyService.success(data.message);
                if(successCallback){
                   successCallback.call(this);
                }
                notificationBarService.getLoadStatus().done();
                return true;
            }).error(function(data){
                if(data.message != undefined){
                    notifyService.error(Translator.trans(data.message));
                }
                if(data[0] != undefined && data[0].message != undefined){
                    notifyService.error(Translator.trans(data[0].message));
                }
                $scope.form.errors = {};
                if(data.errors){
                    if(data.errors.errors){
                        $.each(data.errors.errors,function(index,value){
                            notifyService.error(Translator.trans(value));
                        });
                    }
                    $scope.form.errors = data.errors.children;
                }
                if(errorCallback){
                   successCallback.call(this); 
                }
                notificationBarService.getLoadStatus().done();
                return false;
            });
        }
      
      $scope.loadReportTechnical = function(id){
          reportTechnicalManager.setId(id);
          reportTechnicalManager.init($scope);
          if($scope.data.materials == null){
              reportTechnicalManager.getData().getMaterials();
          }
          if($scope.data.storages == null){
              reportTechnicalManager.getData().getStorages();
          }
          if($scope.data.separated_resins == null){
              reportTechnicalManager.getData().getSeparatedResin();
          }
      };
      
      $scope.reportTechnicalHelper.professional_profile.calculeTotal();
      $scope.reportTechnicalManager = reportTechnicalManager;
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
            description_area_company: {
                detail_product_storage: 'coramer_sigtec_backend_company_report_technical_detail_product_storage',
            },
            data:{
                material: 'coramer_sigtec_backend_company_report_technical_detail_product_storage_material',
                storages: 'coramer_sigtec_backend_company_report_technical_data_storages',
                separated_resin: 'coramer_sigtec_backend_company_report_technical_data_separated_resin'
            },                    
            form: {
                detail_product_storage: 'coramer_sigtec_backend_company_report_technical_detail_product_storage_form',
            }
        }
    };
    var scope = null;
    var data = {};
    var idReportTechnical = null;
    return {
        init: function($scope){
            scope = $scope;
            notificationBarService.getLoadStatus().loading();
            
            var self = this;
            return $http.get(this.generateRoute(config.routes.show)).success(function(d){
                data = d;
                $scope.reportTechnical = d;
                $scope.templates =
                [ { 
                        name: 'formDetailProductStorage.html', 
                        url: self.getUrlFormDetailProductStorage(),
                        loadCallback:$scope.setDataDetailsStorage,
                        parameterCallback: null, 
                        load: false,
                        routes: {
                            create: 'coramer_sigtec_backend_company_report_technical_detail_product_storage_create',
                            update: 'coramer_sigtec_backend_company_report_technical_detail_product_storage_update'
                        },
                        reload: self.reload().detailProductStorage
                    }
                   ];
                $scope.template = '';
                notificationBarService.getLoadStatus().done();
            });
        },
        getData: function(){
            var self = this;
            return {
                getMaterials: function(){
                    return $http.get(self.generateRoute(config.routes.data.material)).success(function(d){
                        var dataArray = [];
                          jQuery.each(d,function(i,val){
                              dataArray[val.id] = val.description;
                          });
                        scope.data.materials = dataArray;
                    });
                },
                getStorages: function(){
                    return $http.get(self.generateRoute(config.routes.data.storages)).success(function(d){
                        var dataArray = [];
                          jQuery.each(d,function(i,val){
                              dataArray[i] = val;
                          });
                        scope.data.storages = dataArray;
                    });
                },
                getSeparatedResin: function(){
                    return $http.get(self.generateRoute(config.routes.data.separated_resin)).success(function(d){
                        var dataArray = [];
                          jQuery.each(d,function(i,val){
                              dataArray[i] = val;
                          });
                        scope.data.separated_resins = dataArray;
                    });
                }
            }
        },
        setId: function(i){
            idReportTechnical = i;
        },
        getId: function(){
            return idReportTechnical;
        },
        reload: function(){
          var self = this;
          return {
              detailProductStorage: function(){
                  return $http.get(self.generateRoute(config.routes.description_area_company.detail_product_storage)).success(function(d){
                        scope.reportTechnical.description_area_company.detail_product_storages = d;
                    });
              }
          }  
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
