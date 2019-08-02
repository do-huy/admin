(function($){

	$(document).ready(function(){
		var vdtClass = function vdtClass(){
			var _this = this;

			_this.initialize();
			
		}

		vdtClass.prototype =  {
			// body...
			initialize : function(){
				var $_this = this;
				$_this.ajaxDistrictTo();
				$_this.ajaxDistrictFrom();
				$_this.audiOnchange();
			},

			//ajax load total price
			ajaxDistrictTo : function(){
				var $_this = this;
				$('#district').on('change', function(){
					var from = $('#districts').val();
					var to = $(this).val();
					if(from){
						$.ajax({
			                  url: '/get-state-list',
			                  type: "GET",
			                  data: {
			                  	to:to,
			                  	from: from
			                  },
			                  dataType: "json",
			                  success:function(data) {
			                  	if (data) {
			                  		$('input[name="bill_people[bill_money]"]').val(data.total);
			                  	}    
			                    $_this.loadSumoAudi();
			                  }
			              });

					}
				});
			},

			//ajax load total price
			ajaxDistrictFrom : function(){
				var $_this = this;
				$('#districts').on('change', function(){
					var to = $('#district').val();
					var from = $(this).val();
					if(to){
						$.ajax({
			                  url: '/region-to-region',
			                  type: "GET",
			                  data: {
			                  	to:to,
			                  	from: from
			                  },
			                  dataType: "json",
			                  success:function(data) {     
			                  	if (data) {              
			                      	$('input[name="bill_people[bill_money]"]').val(data.total);
			                    }
			                      $_this.loadSumoAudi();
			                  }
			              });

					}
				});
			},

			audiOnchange: function(){
				var $_this = this;
				$('.audi').on('change', function(){
					$_this.loadSumoAudi();
				});
			},

			loadSumoAudi: function(){
				var sumoaudi = 0;
					$('.audi').map(function(idx, item){
						var audi = $(item).val();
						if(audi && audi > 0){
							sumoaudi = parseFloat(sumoaudi)+parseFloat(audi);
							return true
						}
						return false
					});

					if(!sumoaudi || isNaN(sumoaudi) || sumoaudi < 1){
						return;
					}

					$('#sumofaudi').val(sumoaudi);
			}
		};

		$(function () {
			//** call controller run oper Detail
			var $_thisController = new vdtClass();

			var mVdt = $.mainVdt = {

			};

			mVdt.loadSumoAudi = $_thisController.loadSumoAudi;
		});
	});
}(jQuery))