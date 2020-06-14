function fileContentLoader(target, fileName, data={date:0}){
    target.load(`php/${fileName}`,data,function(response, status,detail){        
         if(status === 'error'){
            $("#content, .content").html(`<p class="text-center alert alert-danger col">Le contenu demandé est introuvable!</p>`);
            //ou bien
            //$("#table").html(`<p class="text-center alert alert-danger col">Code Erreur : ${detail.status}, ${detail.statusText}</p>`);
        }
    });
}

	//Events
    $(document).ready(function(){
        const content = $('#content');
        fileContentLoader(content, 'connexion.php');
    })
    
