 // Simple State Manager Header

 ssm.addStates([
{
    id: 'medium',
    minWidth: 768,
    maxWidth: 1279,
    onEnter: function(){
        loadcss("/theme/default/css/medium.css");
    }
},
{
    id: 'large',
    minWidth: 1280,
    onEnter: function(){
        loadcss("/theme/default/css/large.css");
    }
}
]);
 ssm.ready();
