// teste si les champs du formulaire sont corrects et :
// - si ils le sont, retourne 'true'
// - sinon, affiche le message d'erreur adéquat dans
//   l'emplacement prévu à cet effet, et retourne 'false'
function checkform() {
    let login = document.getElementById("log").value;
    let password1 = document.getElementById("pass1").value;
    let password2 = document.getElementById("pass2").value;

    // Verify that the login is correct
    // Two conditions :
    // - 3 characters long
    // - only letters
    if (login.length < 3) {
        errormsg("The login must consist of at least 3 characters.")
        return false;
    } else {
        if (login.match(/^[A-Za-z]+$/) === null) {
            errormsg("The login can only contain letters.")
            return false;
        }
    }

    // Verify that the login is correct
    // The only condition is that it is at least 4 characters long
    if (password1.length < 4) {
        errormsg("The password must consist of at least 4 characters.")
        return false;
    }

    // Verify that the second password is equal to the first one
    if (password1 !== password2) {
        errormsg("The second password is not the same as first one.")
        return false;
    }

    return true;
}

// efface le contenu de l'élément où on affiche
// les messages d'erreur et cache cet élément
function resetform() {
    document.getElementById("erreur").style.visibility = "hidden";
    document.getElementById("erreur").innerText = "";
}

// écrit 'msg' dans l'élément où on affiche
// les messages d'erreur et montre cet élément
function errormsg(msg) {
    document.getElementById("erreur").style.visibility = "visible";
    document.getElementById("erreur").innerText = msg;
}
