
    document.getElementById("checkall").onclick = function () 
            {
                // Lấy danh sách checkbox
                var checkboxes = document.getElementsByName('bill');
 
                // Lặp và thiết lập checked
                for (var i = 0; i < checkboxes.length; i++){
                    checkboxes[i].checked = true;
                }
            }; 

            function xacnhanxoa (msg){
  if(window.confirm(msg)) {
    return true;
  }
  return false;
}