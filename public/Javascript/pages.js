    $(document).ready(function() {
        function show(){
            $('#back-to-top').css='display','block;';
            console.log('I have been scrolled');
            }
            window.onscroll=function(ev){
                show();
            }
            
            function start(){
                scrollTo(top);
            }
    })
