!function(window,undefined){"use strict";angular.module("wpiClientDashboard",["ui.bootstrap","ngSanitize"]).controller("InvoiceList",function($scope,$http){$scope.invoice_date_title="",$scope.allowed_status="other",$scope.isLoading=!0,$scope.isError=!1,$scope.displayInvoices=[],$scope.currentPage=1,$scope.perPage="10",$scope.totalItems=0,$scope.maxSize=5,$scope.user=null,$scope.totalAmount=0,$scope.init=function(user){"object"==typeof user&&($scope.user=user),$scope.loadInvoices(0,$scope.perPage)},$scope.setInvoiceType=function(type){$scope.allowed_status=type,$scope.loadInvoices(0,$scope.perPage),"other"==type?($("#btn-paid").removeClass("active"),$("#btn-other").addClass("active")):($("#btn-paid").addClass("active"),$("#btn-other").removeClass("active"))},$scope.goToInvoice=function(permalink){window.location=permalink},$scope.paginate=function(){$scope.loadInvoices(($scope.currentPage-1)*$scope.perPage,$scope.perPage)},$scope.loadInvoices=function(offset,per_page){$scope.isLoading=!0,$http({method:"GET",url:ajaxurl,params:{action:"cd_get_invoices",offset:offset,per_page:per_page,wpi_user_id:$scope.user.wpi_user_id||!1,wpi_token:$scope.user.wpi_token||!1,allowed_status:$scope.allowed_status}}).success(function(data){try{"string"==typeof data&&JSON.parse(data)}catch(e){return $scope.isError=!0,void($scope.isLoading=!1)}$scope.displayInvoices=data.items,$scope.totalItems=data.total,$scope.totalAmount=data.amount,$scope.invoice_date_title=data.invoice_date_title,$scope.isLoading=!1})}})}(this);