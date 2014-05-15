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
          
//          var url = Routing.generate('coramer_sigtec_backend_company_client_index',{_format:'json'});
//          return $http.get(url).success(function(data) {
//              console.log(data);
//            $scope.data = data;
//            
//        }).error(function(data){
//            notificationBarService.getLoadStatus().error();
//        });
          
  }])
  .controller('CompanyIndexController', function($scope,$http,notifyService) {
          //Realiza una llamada de una url mediante ajax
          $scope.itemCallAjaxUrl = function(url){
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
              id: null,
              professional_profile: {
                  quantity_professionals: 0,
                    quantity_technical: 0,
                    quantity_laborers: 0,
                    quantity_other: 0,
                    total: 0
              },
              description_area_company: {
                  id: null,
                  plants_description: { },
                  detail_product_storages: { }
              },
              production_levels: { },
              products_manufactured: { },
              additives_used: { },
              other_plastic_resin: {
                  id: null,
                  use_other_plastic_resins: false,
                  detail_others_plastic_resin: { }
              }
          };
          
      var defaultModel = {
          detail_product_storage:{
              id: null,
              material: { id: 0, description: '' },
              storage: null,
              separated_resin: null,
              total_area: 0,
              covered_area: 0,
          },
          production_level: {
                  type_process: null,
                  process: null,
                  shifts: 0,
                  hours: 0,
                  days_month: 0,
                  theoretical: 0,
                  installed: 0,
                  busy: 0,
                  idle: 0,
                  percentage: 0
              },
          product_manufactured: {
              resin: null,
              grade: null,
              process: null,
              product: null,
              requirement: 0
          },
          additive_used: {
              base_polymer: null,
              mark: null,
              concentration: null,
              type_concentration: null,
              additive: null,
              product: null,
              additive_supplier: null
          },
          other_plastic_resin:{
              use_other_plastic_resins: false,
              detail_other_plastic_resin: {
                  process: null,
                  product: null,
                  resin: null,
                  requirement: 0,
                  grade: null,
                  supplier: null
              }
          }
      };
      
      $scope.model = defaultModel;
      $scope.data = {
          materials: null,
          plants: null,
          storages: null,
          separated_resins: null,
          type_process: null,
          process: null,
          resins: {
              by_coramer: null,
              not_by_coramer: null
          },
          grades: null,
          cache_grades: null,
          product_manufactured: {
              process: null
          },
          products: null,
          additive: {
              type_concentration: null,
              additives: null,
              products: null,
              suppliers: null
          }
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
      
      $scope.templateLoad = function(template){
          template.load = true;
          return openFormModal();
      }
      
      $scope.openModalForm = function (){
          if($scope.template.load == true){
              openFormModal();
          }
      }
      //Abre la ventana modal para añadir o actualizar los detalles de almacenamiento del producto
      $scope.addDetailsStorage = function(detailProductStorage){
          notificationBarService.getLoadStatus().loading();
          $scope.templates.formDetailProductStorage.parameterCallback = detailProductStorage;
          $scope.template = $scope.templates.formDetailProductStorage;
          $scope.openModalForm();
      };
      //Abre la ventana modal para añadir o actualizar un nivel de produccion
      $scope.addLevelProduction = function(levelProduction){
          notificationBarService.getLoadStatus().loading();
          $scope.templates.formProductionLevel.parameterCallback = levelProduction;
          $scope.template = $scope.templates.formProductionLevel;
          $scope.openModalForm();
      };
      //Añade o actualiza un producto fabricado
      $scope.addProductManufactured = function(productManufactured){
          notificationBarService.getLoadStatus().loading();
          $scope.templates.formProductManufactured.parameterCallback = productManufactured;
          $scope.template = $scope.templates.formProductManufactured;
          $scope.openModalForm();
      };
      //Añade o actualiza un aditivo usado en el proceso
      $scope.addAdditiveUsed = function(additiveUsed){
          notificationBarService.getLoadStatus().loading();
          $scope.templates.formAdditiveUsed.parameterCallback = additiveUsed;
          $scope.template = $scope.templates.formAdditiveUsed;
          $scope.openModalForm();
      };
      //Añade o actualiza un detalle de otra resina plastica
      $scope.addDetailOtherPlasticResin = function(detailOtherPlasticResin){
          notificationBarService.getLoadStatus().loading();
          $scope.templates.formDetailOtherPlasticResin.parameterCallback = detailOtherPlasticResin;
          $scope.template = $scope.templates.formDetailOtherPlasticResin;
          $scope.openModalForm();
      };
    //Setea el formulario detalle de almacenaje del producto
    $scope.setDataDetailsStorage = function(detailProductStorage){
        if(detailProductStorage != undefined){
              $scope.reportTechnicalHelper.form.action.url = Routing.generate($scope.template.routes.update,{id: detailProductStorage.id});
              $scope.model.detail_product_storage.material = $scope.data.materials[detailProductStorage.material.id];
              $scope.model.detail_product_storage.plant = $scope.data.plants[detailProductStorage.plant.id];
              $scope.model.detail_product_storage.storage = $scope.data.storages[detailProductStorage.storage];
              $scope.model.detail_product_storage.separated_resin = $scope.data.separated_resins[detailProductStorage.separated_resin];
              $scope.model.detail_product_storage.total_area = detailProductStorage.total_area;
              $scope.model.detail_product_storage.covered_area = detailProductStorage.covered_area;
              
              reportTechnicalManager.getData().getDedications(detailProductStorage.plant,detailProductStorage.dedication.id);
          }else{
              $scope.reportTechnicalHelper.form.action.url = Routing.generate($scope.template.routes.create,{id: $scope.reportTechnical.id});
              $scope.model.detail_product_storage = {
                        id: null,
                        material: { id: 0, description: '' },
                        storage: null,
                        separated_resin: null,
                        total_area: 0,
                        covered_area: 0,
                        plant: null,
                        dedication: null,
                    };
          }
    }
    //Establece la data del formulario de nivel de produccion
    $scope.setDataProductionLevel = function(productionLevel){
        if(productionLevel != undefined){
              $scope.reportTechnicalHelper.form.action.url = Routing.generate($scope.template.routes.update,{id: $scope.reportTechnical.id, slug:productionLevel.id});
              
              $scope.model.production_level.type_process = $scope.data.type_process[productionLevel.process.type_process.id];
              $scope.model.production_level.shifts = productionLevel.shifts;
              $scope.model.production_level.hours = productionLevel.hours;
              $scope.model.production_level.daysMonth = productionLevel.daysMonth;
              $scope.model.production_level.theoretical = productionLevel.theoretical;
              $scope.model.production_level.installed = productionLevel.installed;
              $scope.model.production_level.busy = productionLevel.busy;
              $scope.model.production_level.idle = productionLevel.idle;
              $scope.model.production_level.percentage = productionLevel.percentage;
              
              reportTechnicalManager.getData().getProcess(productionLevel.process.type_process.id,productionLevel.process.id);
          }else{
              $scope.reportTechnicalHelper.form.action.url = Routing.generate($scope.template.routes.create,{id: $scope.reportTechnical.id});
              $scope.model.production_level = {
                  type_process: null,
                  process: null,
                  shifts: 0,
                  hours: 0,
                  days_month: 0,
                  theoretical: 0,
                  installed: 0,
                  busy: 0,
                  idle: 0,
                  percentage: 0
              };
          }
    }
    //Establece la data del formulario de los productos fabricados
    $scope.setDataProductManufactured = function(productManufactured){
        if(productManufactured != undefined){
             $scope.reportTechnicalHelper.form.action.url = Routing.generate($scope.template.routes.update,{id: $scope.reportTechnical.id, slug:productManufactured.id});
             
             $scope.reportTechnicalManager.getData().getGrade(productManufactured.grade.resin,productManufactured.grade.id);
             
             $scope.model.product_manufactured.resin = $scope.data.resins[productManufactured.grade.resin.id];
             $scope.model.product_manufactured.process = $scope.data.product_manufactured.process[productManufactured.process.id];
             $scope.model.product_manufactured.product = $scope.data.products[productManufactured.product.id];
             $scope.model.product_manufactured.requirement = productManufactured.requirement;
          }else{
              $scope.reportTechnicalHelper.form.action.url = Routing.generate($scope.template.routes.create,{id: $scope.reportTechnical.id});
              $scope.model.product_manufactured = {
                  resin: null,
                  grade: null,
                  process: null,
                  product: null,
                  requirement: 0
              };
          }
    }
    //Establece la data del formulario de los productos fabricados
    $scope.setDataProductManufactured = function(productManufactured){
        if(productManufactured != undefined){
             $scope.reportTechnicalHelper.form.action.url = Routing.generate($scope.template.routes.update,{id: $scope.reportTechnical.id, slug:productManufactured.id});
             
             $scope.reportTechnicalManager.getData().getGrade(productManufactured.grade.resin,productManufactured.grade.id);
             
             $scope.model.product_manufactured.resin = $scope.data.resins[productManufactured.grade.resin.id];
             $scope.model.product_manufactured.process = $scope.data.product_manufactured.process[productManufactured.process.id];
             $scope.model.product_manufactured.product = $scope.data.products[productManufactured.product.id];
             $scope.model.product_manufactured.requirement = productManufactured.requirement;
          }else{
              $scope.reportTechnicalHelper.form.action.url = Routing.generate($scope.template.routes.create,{id: $scope.reportTechnical.id});
              $scope.model.product_manufactured = {
                  resin: null,
                  grade: null,
                  process: null,
                  product: null,
                  requirement: 0
              };
          }
    }
    //Establece la data del formulario de aditivos
    $scope.setDataAdditiveUsed = function(additiveUsed){
        if(additiveUsed != undefined){
             $scope.reportTechnicalHelper.form.action.url = Routing.generate($scope.template.routes.update,{id: $scope.reportTechnical.id, slug:additiveUsed.id});
             $scope.model.additive_used.additive = $scope.data.additive.additives[additiveUsed.additive.id];
             $scope.model.additive_used.product = $scope.data.additive.products[additiveUsed.product.id];
             $scope.model.additive_used.additive_supplier = $scope.data.additive.suppliers[additiveUsed.additive_supplier.id];
             $scope.model.additive_used.base_polymer = additiveUsed.base_polymer;
             $scope.model.additive_used.mark = additiveUsed.mark;
             $scope.model.additive_used.concentration = additiveUsed.concentration;
             $scope.model.additive_used.type_concentration = $scope.data.additive.type_concentration[additiveUsed.type_concentration];
          }else{
              $scope.reportTechnicalHelper.form.action.url = Routing.generate($scope.template.routes.create,{id: $scope.reportTechnical.id});
              $scope.model.additive_used = {
                  additive: null,
                  product: null,
                  additive_supplier: null,
                  base_polymer: null,
                  mark: null,
                  concentration: null,
                  type_concentration: null,
              }
          }
    }
    //Establece la data del formulario de los detalles de las otras resinas plasticas
    $scope.setDataDetailOtherPlasticResin = function(detailOtherPlasticResin){
        if(detailOtherPlasticResin != undefined){
             $scope.reportTechnicalHelper.form.action.url = Routing.generate($scope.template.routes.update,{id: $scope.reportTechnical.id, slug:detailOtherPlasticResin.id});
             
            $scope.model.other_plastic_resin.detail_other_plastic_resin.process = $scope.data.product_manufactured.process[detailOtherPlasticResin.process.id];
            $scope.model.other_plastic_resin.detail_other_plastic_resin.product = $scope.data.products[detailOtherPlasticResin.product.id];
            $scope.model.other_plastic_resin.detail_other_plastic_resin.resin = $scope.data.resins.not_by_coramer[detailOtherPlasticResin.resin.id];
            $scope.model.other_plastic_resin.detail_other_plastic_resin.grade = detailOtherPlasticResin.grade;
            $scope.model.other_plastic_resin.detail_other_plastic_resin.requirement = detailOtherPlasticResin.requirement;
            $scope.model.other_plastic_resin.detail_other_plastic_resin.supplier = detailOtherPlasticResin.supplier;
             
          }else{
              $scope.reportTechnicalHelper.form.action.url = Routing.generate($scope.template.routes.create,{id: $scope.reportTechnical.id});
              $scope.model.other_plastic_resin.detail_other_plastic_resin = {
                  process: null,
                  product: null,
                  resin: null,
                  requirement: 0,
                  grade: null,
                  supplier: null
              }
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
          $scope.modal = $.modal.showForm(area,confirmFormModal,cancelFormModal);
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
      
      //Establece la lista de procesos registrados del reporte
      $scope.setProductManufacturedProcess = function(data){
          var dataArray = [];
          jQuery.each(data,function(i,val){
              dataArray[val.process.id] = val.process;
          });
          $scope.data.product_manufactured.process = dataArray;
      };
      
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
          if($scope.data.type_process == null){
              reportTechnicalManager.getData().getTypeProcess();
          }
          if($scope.data.resins.by_coramer == null){
              reportTechnicalManager.getData().getResinByCoramer();
          }
          if($scope.data.resins.not_by_coramer == null){
              reportTechnicalManager.getData().getResinNotByCoramer();
          }
          if($scope.data.products == null){
              reportTechnicalManager.getData().getProduct();
          }
          if($scope.data.additive.type_concentration == null){
              reportTechnicalManager.getData().getAdditiveTypeConcentration();
          }
          if($scope.data.additive.additives == null){
              reportTechnicalManager.getData().getAdditives();
          }
          if($scope.data.additive.suppliers == null){
              reportTechnicalManager.getData().getSuppliers();
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
      $scope.getCities();
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
            production_level: 'coramer_sigtec_backend_company_report_technical_properties_production_level',
            product_manufactured: 'coramer_sigtec_backend_company_report_technical_properties_product_manufactured',
            additive_used: 'coramer_sigtec_backend_company_report_technical_properties_additive_used',
            other_plastic_resin: 'coramer_sigtec_backend_company_report_technical_properties_other_plastic_resin',
            data:{
                material: 'coramer_sigtec_backend_company_report_technical_detail_product_storage_material',
                storages: 'coramer_sigtec_backend_company_report_technical_data_storages',
                separated_resin: 'coramer_sigtec_backend_company_report_technical_data_separated_resin',
                type_process: 'coramer_sigtec_backend_company_report_technical_data_type_process',
                process: 'coramer_sigtec_backend_company_report_technical_data_process',
                resin: {
                    by_coramer: 'coramer_sigtec_backend_company_report_technical_data_resin_by_coramer',
                    not_by_coramer: 'coramer_sigtec_backend_company_report_technical_data_resin_not_by_coramer'
                },
                grade: 'coramer_sigtec_backend_company_report_technical_data_grade',
                product: 'coramer_sigtec_backend_company_report_technical_data_product',
                plants: 'coramer_sigtec_backend_company_plant_company',
                additive_type_concentration: 'coramer_sigtec_backend_company_report_technical_data_additive_type_concentration',
                additive: 'coramer_sigtec_backend_company_report_technical_data_additive',
                additive_products: 'coramer_sigtec_backend_company_report_technical_data_additive_products',
                additive_suppliers: 'coramer_sigtec_backend_company_report_technical_data_additive_suppliers',
            },                    
            form: {
                detail_product_storage: 'coramer_sigtec_backend_company_report_technical_detail_product_storage_form',
                production_level: 'coramer_sigtec_backend_company_report_technical_properties_production_level_form',
                product_manufactured: 'coramer_sigtec_backend_company_report_technical_properties_product_manufactured_form',
                additive_used: 'coramer_sigtec_backend_company_report_technical_properties_additive_used_form',
                detail_other_plastic_resin: 'coramer_sigtec_backend_company_report_technical_properties_detail_other_plastic_resin_form',
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
                $scope.setProductManufacturedProcess(d.production_levels);
                $scope.templates =
                {
                    formDetailProductStorage: { 
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
                    },
                    formProductionLevel: { 
                        name: 'formProductionLevel.html', 
                        url: self.getUrlFormProductionLevel(),
                        loadCallback:$scope.setDataProductionLevel,
                        parameterCallback: null, 
                        load: false,
                        routes: {
                            create: 'coramer_sigtec_backend_company_report_technical_properties_production_level_create',
                            update: 'coramer_sigtec_backend_company_report_technical_properties_production_level_update'
                        },
                        reload: self.reload().productionLevel
                    },
                    formProductManufactured: { 
                        name: 'formProductManufactured.html', 
                        url: self.getUrlFormProductManufactured(),
                        loadCallback:$scope.setDataProductManufactured,
                        parameterCallback: null, 
                        load: false,
                        routes: {
                            create: 'coramer_sigtec_backend_company_report_technical_properties_product_manufactured_create',
                            update: 'coramer_sigtec_backend_company_report_technical_properties_product_manufactured_update'
                        },
                        reload: self.reload().productManufactured
                    },
                    formAdditiveUsed: { 
                        name: 'formAdditiveUsed.html', 
                        url: self.getUrlFormAdditiveUsed(),
                        loadCallback:$scope.setDataAdditiveUsed,
                        parameterCallback: null, 
                        load: false,
                        routes: {
                            create: 'coramer_sigtec_backend_company_report_technical_properties_additive_used_create',
                            update: 'coramer_sigtec_backend_company_report_technical_properties_additive_used_update'
                        },
                        reload: self.reload().additiveUsed
                    },
                    formDetailOtherPlasticResin: { 
                        name: 'formDetailOtherPlasticResin.html', 
                        url: self.getUrlFormDetailOtherPlasticResin(),
                        loadCallback:$scope.setDataDetailOtherPlasticResin,
                        parameterCallback: null, 
                        load: false,
                        routes: {
                            create: 'coramer_sigtec_backend_company_report_technical_properties_detail_other_plastic_resin_create',
                            update: 'coramer_sigtec_backend_company_report_technical_properties_detail_other_plastic_resin_update'
                        },
                        reload: self.reload().detailOtherPlasticResin
                    }
                };
                $scope.template = '';
                self.getData().getPlants($scope.reportTechnical.company.id);
                scope.reportTechnicalManager.getData().getAdditivesProducts();
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
                },
                getTypeProcess: function(){
                    return $http.get(self.generateRoute(config.routes.data.type_process)).success(function(d){
                        var dataArray = [];
                          jQuery.each(d,function(i,val){
                              dataArray[val.id] = val.description;
                          });
                        scope.data.type_process = dataArray;
                    });
                },
                getResinByCoramer: function(){
                    return $http.get(self.generateRoute(config.routes.data.resin.by_coramer)).success(function(d){
                        var dataArray = [];
                          jQuery.each(d,function(i,val){
                              dataArray[val.id] = val;
                          });
                        scope.data.resins.by_coramer = dataArray;
                    });
                },
                getResinNotByCoramer: function(){
                    return $http.get(self.generateRoute(config.routes.data.resin.not_by_coramer)).success(function(d){
                        var dataArray = [];
                          jQuery.each(d,function(i,val){
                              dataArray[val.id] = val;
                          });
                        scope.data.resins.not_by_coramer = dataArray;
                    });
                },
                getProduct: function(){
                    return $http.get(self.generateRoute(config.routes.data.product)).success(function(d){
                        var dataArray = [];
                          jQuery.each(d,function(i,val){
                              dataArray[val.id] = val;
                          });
                        scope.data.products = dataArray;
                    });
                },
                getGrade: function(resin,selected){
                        if(scope.data.cache_grades == null){
                            return $http.get(self.generateRoute(config.routes.data.grade)).success(function(d){
                              var dataArrayTmp = [];
                              jQuery.each(d,function(i,val){
                                  dataArrayTmp[val.id] = val;
                              });
                              scope.data.cache_grades = dataArrayTmp;
                            });
                        }

                        var dataArray = [];
                        jQuery.each(scope.data.cache_grades,function(i,vals){
                            if(vals != undefined){
                                if(vals.resin.id == resin.id){
                                    dataArray[vals.id] = vals;
                                }
                            }
                        });
                        
                        scope.data.grades = dataArray;
                        if(selected != undefined){
                            scope.model.product_manufactured.grade = dataArray[selected];
                        }
                },
                getProcess: function(idTypeProcess,selected){
                    if(idTypeProcess !== parseInt(idTypeProcess)){
                        jQuery.each(scope.data.type_process,function(i,val){
                            if(idTypeProcess == val){
                                idTypeProcess = i;
                            }
                        });
                    }
                    notificationBarService.getLoadStatus().loading();
                    scope.data.process = {};
                    return $http.get(self.generateRoute(config.routes.data.process,{idTypeProcess: idTypeProcess})).success(function(d){
                        var dataArray = [];
                          jQuery.each(d,function(i,val){
                              dataArray[val.id] = val.description;
                          });
                        scope.data.process = dataArray;
                        if(selected != undefined){
                            scope.model.production_level.process = scope.data.process[selected];
                            //scope.openModalForm();
                            //scope.modal.closeModal();
                            $.modal.preBuildShowForm(jQuery("#div-template"));
                            //scope.openModalForm();
                        }
                        notificationBarService.getLoadStatus().done();
                    });
                },
                getPlants: function(companyId){
                    return $http.get(self.generateRoute(config.routes.data.plants,{company_id: companyId})).success(function(d){
                        var dataArray = [];
                          jQuery.each(d,function(i,val){
                              dataArray[val.id] = val;
                          });
                        scope.data.plants = dataArray;
                    });
                },
                getDedications: function(plant,selected){
                        var dataArray = [];
                        jQuery.each(plant.dedications,function(i,vals){
                            if(vals != undefined){
                                dataArray[vals.id] = vals;
                            }
                        });
                        
                        scope.data.dedications = dataArray;
                        if(selected != undefined){
                            scope.model.detail_product_storage.dedication = dataArray[selected];
                        }
                },
                getAdditiveTypeConcentration: function(){
                    return $http.get(self.generateRoute(config.routes.data.additive_type_concentration)).success(function(d){
                        var dataArray = [];
                          jQuery.each(d,function(i,val){
                              dataArray[i] = val;
                          });
                        scope.data.additive.type_concentration = dataArray;
                    });
                },
                getAdditives: function(){
                    return $http.get(self.generateRoute(config.routes.data.additive)).success(function(d){
                        var dataArray = [];
                          jQuery.each(d,function(i,val){
                              dataArray[val.id] = val;
                          });
                        scope.data.additive.additives = dataArray;
                    });
                },
                getAdditivesProducts: function(selected){
                        var dataArray = [];
                        jQuery.each(scope.reportTechnical.products_manufactured,function(i,vals){
                            if(vals != undefined){
                                dataArray[vals.product.id] = vals.product;
                            }
                        });
                        scope.data.additive.products = dataArray;
                        if(selected != undefined){
                            scope.model.additive_used.product = dataArray[selected];
                        }
                },
                getSuppliers: function(){
                    return $http.get(self.generateRoute(config.routes.data.additive_suppliers)).success(function(d){
                        var dataArray = [];
                          jQuery.each(d,function(i,val){
                              dataArray[val.id] = val;
                          });
                        scope.data.additive.suppliers = dataArray;
                    });
                },
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
              },
              productionLevel: function(){
                  return $http.get(self.generateRoute(config.routes.production_level)).success(function(d){
                        scope.reportTechnical.production_levels = d;
                        var dataArray = [];
                          jQuery.each(d,function(i,val){
                              dataArray[val.process.id] = val.process;
                          });
                        scope.data.product_manufactured.process = dataArray;
                    });
              },
              productManufactured: function(){
                  return $http.get(self.generateRoute(config.routes.product_manufactured)).success(function(d){
                        scope.reportTechnical.products_manufactured = d;
                    });
              },
              additiveUsed: function(){
                  return $http.get(self.generateRoute(config.routes.additive_used)).success(function(d){
                        scope.reportTechnical.additives_used = d;
                    });
              },
              detailOtherPlasticResin: function(){
                  return $http.get(self.generateRoute(config.routes.other_plastic_resin)).success(function(d){
                        scope.reportTechnical.other_plastic_resin = d;
                    });
              },
          }  
        },
        generateRoute: function(route,parameters){
            parameters = $.extend({_format:'json',id:idReportTechnical},{}, parameters);
            return Routing.generate(route,parameters);
        },
        getProfessionalProfile: function(){
            return $http.get(this.generateRoute(config.routes.professional_profile)).success(function(d){
                
            });
        },
        getUrlFormDetailProductStorage: function() {
            return this.generateRoute(config.routes.form.detail_product_storage,{_format:'html'});
        },
        getUrlFormProductionLevel: function() {
            return this.generateRoute(config.routes.form.production_level,{_format:'html'});
        },
        getUrlFormProductManufactured: function() {
            return this.generateRoute(config.routes.form.product_manufactured,{_format:'html'});
        },
        getUrlFormAdditiveUsed: function() {
            return this.generateRoute(config.routes.form.additive_used,{_format:'html'});
        },
        getUrlFormDetailOtherPlasticResin: function() {
            return this.generateRoute(config.routes.form.detail_other_plastic_resin,{_format:'html'});
        },
    }
});
