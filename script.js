
    // On récupère le formulaire et la zone d'affichage
    const form = document.getElementById('monFormulaire');
    const resultat = document.getElementById('resultat');

    // Écoute de l'envoi du formulaire
    form.addEventListener('submit', function (event) {
      event.preventDefault(); // Empêche le rechargement de la page

      // Récupération des valeurs
      const nom = document.getElementById('nom').value.trim();
      const prenoms = document.getElementById('prenoms').value.trim();
      const age = document.getElementById('age').value.trim();

      // Vérification des champs vides
      if (nom === '' || prenoms === '' || age === '') {
        resultat.textContent = 'Veuillez remplir tous les champs.';
        resultat.style.color = 'red';
        return;
      }

      // Vérification de l'âge
      if (isNaN(age) || age < 0 || age > 120) {
        resultat.textContent = 'Veuillez entrer un âge valide entre 0 et 120.';
        resultat.style.color = 'red';
        return;
      }

      // Affichage des informations
      resultat.innerHTML = `
        <strong>Nom :</strong> ${nom}<br>
        <strong>Prénoms :</strong> ${prenoms}<br>
        <strong>Âge :</strong> ${age} ans
      `;
      resultat.style.color = 'green';

      // Réinitialisation du formulaire
      form.reset();
    });
 