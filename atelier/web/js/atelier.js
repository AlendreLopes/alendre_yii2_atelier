$(document).ready(function(){
    // $('.switch').click((event)=>{
    //     $([".light [class*='-light']", ".dark [class*='-dark']"]).each((i,ele)=>{
    //         $(ele).toggleClass('bg-light bg-dark')
    //         $(ele).toggleClass('text-light text-dark')
    //         $(ele).toggleClass('navbar-light navbar-dark')
    //     })
    //     // toggle body class selector
    //     $('body').toggleClass('light dark')
    //     // event.preventDefault();
    // })
    var alendreAtelier = new fullpage('#fullpage', {
        sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
        anchors: ['atelier', 'about', 'team', 'sponsor', 'contact'],
        menu: '#navbar-alendre',
        continuousVertical: true,
        navigation: true,
        afterLoad: function(origin, destination, direction, trigger){
            console.log("afterLoad: destination:" + destination.index);
        },
        onLeave: function(origin, destination, direction, trigger){
            console.log("onLeave: destination:" + destination.index);
        },
    });  
});