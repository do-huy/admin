 $(document).on('keyup', '#fromValue', function() {
        let $toValue = $('#toValue')
        let value = parseInt($(this).val());
        if (value > 500000) {
            $toValue.val(value * 1 / 100);
        } else if (value < 500000) {
            $toValue.val(5000);
        } 
    })

 function add(){
   fst=parseInt(myform.fst.value);
   snd=parseInt(myform.snd.value);
   snss=parseInt(myform.snss.value);
   bill_total=(fst*snd*snss)/6000;
   myform.bill_total.value=bill_total;
  }

$(document).ready(function(){

      $('#province').on('change', function() {
     
          var province_listID = $(this).val();
          if(province_listID) {
              $.ajax({
                  url: '/get-state-list/'+province_listID,
                  type: "GET",
                  dataType: "json",
                  success:function(data) {                      
                      $('select[name="bill[bill_district]"]').empty();
                      $.each(data, function(key, data) {
                          $('select[name="bill[bill_district]"]').append('<option value="'+ data['district_id'] +'">'+ data['district_name'] +'</option>');
                      });
                  }
              });
          }else{
              $('select[name="district"]').empty();
          }
      });

       if($('#province').val()) {
     
          var province_listID = $('#province').val();
          if(province_listID) {
              $.ajax({
                  url: '/get-state-list/'+province_listID,
                  type: "GET",
                  dataType: "json",
                  success:function(data) {                      
                      $('select[name="bill[bill_district]"]').empty();
                      $.each(data, function(key, data) {
                          $('select[name="bill[bill_district]"]').append('<option value="'+ data['district_id'] +'">'+ data['district_name'] +'</option>');
                      });
                       if($('#district').val()) {
                          var districtDonhang = $('input#district_donhang').val();
                          $('#district').val(districtDonhang);

                          var district_listID = $('#district').val();
                          if(district_listID) {
                              $.ajax({
                                  url: '/get-ward-list/'+district_listID,
                                  type: "GET",
                                  dataType: "json",
                                  success:function(data) {                      
                                      $('select[name="bill[bill_ward]"]').empty();
                                      $.each(data, function(key, data) {
                                          $('select[name="bill[bill_ward]"]').append('<option value="'+ data['ward_id'] +'">'+ data['ward_name'] +'</option>');
                                      });

                                  }
                              });
                          }else{
                              $('select[name="ward"]').empty();
                          }
    
                          var wardDonhang = $('input#ward_donhang').val();
                          $('#ward').val(wardDonhang);
                      };
                  }
              });
          }else{
              $('select[name="district"]').empty();
          }
      };

      $('#district').on('change', function() {
      
          var district_listID = $(this).val();
          if(district_listID) {
              $.ajax({
                  url: '/get-ward-list/'+district_listID,
                  type: "GET",
                  dataType: "json",
                  success:function(data) {                      
                      $('select[name="bill[bill_ward]"]').empty();
                      $.each(data, function(key, data) {
                          $('select[name="bill[bill_ward]"]').append('<option value="'+ data['ward_id'] +'">'+ data['ward_name'] +'</option>');
                      });

                  }
              });
          }else{
              $('select[name="ward"]').empty();
          }
      });

  });


 $(document).ready(function()
  {
      $('#provinces').on('change', function() {
        console.log('change');
          var province_listID = $(this).val();
          if(province_listID) {
              $.ajax({
                  url: '/get-state-list/'+province_listID,
                  type: "GET",
                  dataType: "json",
                  success:function(data) {                      
                      $('select[name="bill_people[bill_district_people]"]').empty();
                      $.each(data, function(key, data) {
                          $('select[name="bill_people[bill_district_people]"]').append('<option value="'+ data['district_id'] +'">'+ data['district_name'] +'</option>');
                      });
                  }
              });
          }else{
              $('select[name="district"]').empty();
          }
      });
  });


 $(document).ready(function()
  {
      $('#districts').on('change', function() {
        console.log('change');
          var district_listID = $(this).val();
          if(district_listID) {
              $.ajax({
                  url: '/get-ward-list/'+district_listID,
                  type: "GET",
                  dataType: "json",
                  success:function(data) {                      
                      $('select[name="bill_people[bill_ward_people]"]').empty();
                      $.each(data, function(key, data) {
                          $('select[name="bill_people[bill_ward_people]"]').append('<option value="'+ data['ward_id'] +'">'+ data['ward_name'] +'</option>');
                      });
                  }
              });
          }else{
              $('select[name="ward"]').empty();
          }
      });
  });
