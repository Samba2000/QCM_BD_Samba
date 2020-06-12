function fileContentLoader(target, fileName, data={date:0}){
    target.load(`php/${fileName}`,data,function(response, status,detail){        
         if(status === 'error'){
            $("#content, .content").html(`<p class="text-center alert alert-danger col">Le contenu demandé est introuvable!</p>`);
            //ou bien
            //$("#table").html(`<p class="text-center alert alert-danger col">Code Erreur : ${detail.status}, ${detail.statusText}</p>`);
        }
    });
}

$('.admin').click(function(e){
    const content = $('#affiche');
    if(e.target.id === 'question'){
        fileContentLoader(content, 'fixe_modifie.php');
    }else if(e.target.id === 'admin'){
        fileContentLoader(content, 'Admins.php');
    }else if(e.target.id === 'joueur'){
        fileContentLoader(content, 'joueur.php');
    }else if(e.target.id === 'nbreq'){
        fileContentLoader(content, 'nbreq.php');
    }
});