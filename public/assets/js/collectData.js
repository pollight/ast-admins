var allData=new Array();
$('#collect').click(function(){
    allData=new Array();
    $('#allTabs').find('input').each(function(key,val){
        // console.log(key,'  ',$(this).val(),' ',$(this).attr("id"))
        
        var id=$(this).attr("id");
        var data=$(this).val();
        if (id.includes('Enable')) {
            data=$(this).prop('checked')
        };
                       
        allData.push({id:id,val:data})
});
  

if(obj[0]==0){
  		   $.ajax({
            type: "POST",
            url: "/Addrecepts",
            headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {"data":allData},
                 //   processData: false,
                               

            success: function(msg){
              alert( "Прибыли данные: " );
              console.log(msg);
            },
            error: function(){
                alert('error!');
            }
            
          });
}else{
     $.ajax({
            type: "POST",
            url: "/updateRecepts",
            headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {"data":allData},
                 //   processData: false,
                               

            success: function(msg){
              alert( "Прибыли данные: " );
              console.log(msg);
            },
            error: function(){
                alert('error!');
            }
            
          });
}


})

