let day = true;
// on document ready
document.addEventListener('DOMContentLoaded', function() {
    if ( localStorage.getItem('dark') ) {
        day = false;
        showNight();
    } else {
        day = true;
        showDay();
    }

    document.documentElement.classList.add('transition-colors');
});

document.getElementById('darkToggle').addEventListener('click', function(){
    document.documentElement.classList.add('duration-300');
    
    if(document.documentElement.classList.contains('dark')){
        localStorage.removeItem('dark');
        showDay(true);
        
    } else {
        localStorage.setItem('dark', true);
        showNight(true);
        
    }
});

document.getElementById('openMenu').addEventListener('click', function(){
    document.getElementById('menu').classList.remove('hidden');
    document.getElementById('closeMenu').classList.remove('hidden');
});

document.getElementById('closeMenu').addEventListener('click', function(){
    this.classList.add('hidden');
    document.getElementById('menu').classList.add('hidden');
});

function showDay(animate){
    document.getElementById('sun').classList.remove('setting');
    document.getElementById('moon').classList.remove('rising');
    
    let timeout = 0;
    

    if(animate){
        timeout = 500;
        
        document.getElementById('moon').classList.add('setting');
    }

    setTimeout(function(){
        document.getElementById('dayText').classList.remove('hidden');
        document.getElementById('nightText').classList.add('hidden');

        document.getElementById('moon').classList.add('hidden');
        document.getElementById('sun').classList.remove('hidden');

        if(animate){
            document.documentElement.classList.remove('dark');
            document.getElementById('sun').classList.add('rising');
        }
        
    }, timeout);
}

function showNight(animate){
    document.getElementById('moon').classList.remove('setting');
    document.getElementById('sun').classList.remove('rising');

    let timeout = 0;
    

    if(animate){
        timeout = 500;
        
        document.getElementById('sun').classList.add('setting');
    }

    setTimeout(function(){
        document.getElementById('nightText').classList.remove('hidden');
        document.getElementById('dayText').classList.add('hidden');

        document.getElementById('sun').classList.add('hidden');
        document.getElementById('moon').classList.remove('hidden');

        if(animate){
            document.documentElement.classList.add('dark');
            document.getElementById('moon').classList.add('rising');
        }

    }, timeout);
}