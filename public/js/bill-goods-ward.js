(function(){

	$(document).ready(function(){
		var vddhClass = function vddhClass(){
			var _this = this;

			_this.initialize();
		}

		vddhClass.prototype =  {
			// body...
			initialize : function(){
				var $_this = this;
				$_this.ajaxWardTo();
				$_this.ajaxWardFrom();
			},

			//ajax load total price
			ajaxWardTo : function(){
				$('#ward').on('change', function(){
					var from = $('#wards').val();
					var to = $(this).val();
					if(from){
						$.ajax({
			                  url: '/get-ward-list',
			                  type: "GET",
			                  data: {
			                  	to:to,
			                  	from: from
			                  },
			                  dataType: "json",
			                  success:function(data) {  
			                  	if(data){
			                      $('input[name="bill_people[bill_money]"]').val(data.total);
			                  	}
			                  	$.mainVdt.loadSumoAudi();
			                  }
			              });

					}
				});
			},

			//ajax load total price
			ajaxWardFrom : function(){
				$('#wards').on('change', function(){
					var to = $('#ward').val();
					var from = $(this).val();
					if(to){
						$.ajax({
			                  url: '/region-to-region-ward',
			                  type: "GET",
			                  data: {
			                  	to:to,
			                  	from: from
			                  },
			                  dataType: "json",
			                  success:function(data) {  
			                  	if(data){
			                  		$('input[name="bill_people[bill_money]"]').val(data.total);
			                  	}
			                  	$.mainVdt.loadSumoAudi();
			                  }
			              });

					}
				});
			},
		};
		

		$(function () {
			//** call controller run oper Detail
			var $_thisController = new vddhClass();
		});
	});

}())