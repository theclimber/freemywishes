
function verif_ChampsFormulaire()
{
	var boolPrenom = document.getElementById("prenom").value || 0;
	var boolNom = document.getElementById("nom").value || 0;
	var boolAdresse = document.getElementById("adressepost").value || 0;
	var boolNum =  document.getElementById("numero").value || 0;
	var boolCode = document.getElementById("codepost").value || 0;
	var boolCommune = document.getElementById("commune").value || 0;
	var boolComz = document.getElementById("commentaire").value || 0;

	if (!boolPrenom)
	{
		alert("Merci de remplir le champ 'Prenom' avant d'envoyer le formulaire");
		return false;
	}
	else if (!boolNom)
	{
		alert("Merci de remplir le champ 'Nom' avant d'envoyer le formulaire");
		return false;
	}else if (!boolAdresse)
	{
		alert("Merci de remplir le champ 'Rue/Avenue' avant d'envoyer le formulaire");
		return false;
	}else if (!boolNum)
	{
		alert("Merci de remplir le champ 'Numero' avant d'envoyer le formulaire");
		return false;
	}else if (!boolCode)
	{
		alert("Merci de remplir le champ 'Code Postale' avant d'envoyer le formulaire");
		return false;
	}else if (!boolCommune)
	{
		alert("Merci de remplir le champ 'Commune' avant d'envoyer le formulaire");
		return false;
	}else if (!boolComz)
	{
		alert("Merci de remplir le champ 'Commentaire' avant d'envoyer le formulaire");
		return false;
	}
}
