$(function() {
    /*-----------------------------------------------------------------------------*/
    //Gestion des items
    /*-----------------------------------------------------------------------------*/
    $(".item").draggable({
        accept:".item",
        helper: 'clone',
        revert: 'invalid'

        //permet de place l'item par rapport au bord 
        /*drag: function( event, ui ) {
            var snapTolerance = $(this).draggable('option', 'snapTolerance');
            var topRemainder = ui.position.top % 22;
            var leftRemainder = ui.position.left % 22;  
            if (topRemainder <= snapTolerance) {
                ui.position.top = ui.position.top - topRemainder;
            }  
            if (leftRemainder <= snapTolerance) {
                ui.position.left = ui.position.left - leftRemainder;
            }
        } */                                
    });   
    $("#depot .itemui").draggable({
        //gestion obstacles
        obstacle: ".itemui",
        preventCollision: true,
        containment: "#depot"                               
    });    
    /*-----------------------------------------------------------------------------*/
    //Gestion UI
    /*-----------------------------------------------------------------------------*/        
    $("#depot").droppable({ 
        //accept:".item",
        activeClass:"zone-drop-active",
        hoverClass:"zone-drop-survolee",
    
        drop:function(event, ui){
            var dropped = ui.draggable;
            var droppedOn = $(this);
            //on change la class de l'item si on le pose
            regex = new RegExp("\\bitem\\b");
            if(regex.test(ui.helper.attr('class'))){
                $(this).append(ui.helper.clone().removeClass("ui-draggable-dragging").removeClass("item").addClass('itemui').draggable({helper:'original'}));
            }               
            //alert("OK, image déposée");
        }     
    });
    /*-----------------------------------------------------------------------------*/
    //Supprimer item et supprimer si retour dans list
    /*-----------------------------------------------------------------------------*/        
    $('#trash').droppable({
        accept:".itemui",
        drop: function(event, ui) {
            $(ui.draggable).remove();
        }
    });
    $('#list').droppable({
        accept:".itemui",
        drop: function(event, ui) {
            $(ui.draggable).remove();
        }
    });

});