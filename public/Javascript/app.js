
function toggle(id) {
    document.getElementById(id).style.display = 'none';
    document.getElementById('content2').style.display = 'block';    
    } 
function back(id) {
        document.getElementById(id).style.display = 'none';
        document.getElementById('content1').style.display = 'block';    
        } 



        $('#new-category').click(function() {
            var category_name = $('#category_name').val();
            $.ajax({
              url: '/Admin/Categories/add_category',
              type: 'POST',
              data: {
                category_name: category_name
              },
              success: function(data) {
                if (data.success) {
                  $('#category_name').val('');
                  $('#categories').append(`<option value="${data.id}">${data.category_name}</option>`);
                } else {
                  $('#error_name').text(data.message);
                }
              }
            });
          });  

      
