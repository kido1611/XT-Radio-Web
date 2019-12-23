document.getElementById('btn-sidebar-toogle')
    .addEventListener("click", function(){
        if(document.getElementById('sidebar').classList.contains('hidden')){
            document.getElementById('sidebar').classList.remove('hidden');
        }
        else{
            document.getElementById('sidebar').classList.add('hidden');
        }

        if(document.getElementById('sidebar').classList.contains('md:mini-sidebar')){
            document.getElementById('sidebar').classList.remove('md:mini-sidebar');
            document.getElementById('sidebar').classList.add('md:w-2/5');
        }
        else{
            document.getElementById('sidebar').classList.add('md:mini-sidebar');
            document.getElementById('sidebar').classList.remove('md:w-2/5');
        }
    });