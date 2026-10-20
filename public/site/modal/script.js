/** ESTRUTURA MODAL SUCCES */
document.addEventListener('click', function (e) {
    if (e.target.matches('[data-close-modal]')) {
        const modal = document.getElementById('angoticModal');
        if (modal) {
            modal.style.display = 'none';
        }
    }
});
window.onload = function () {
    document.getElementById('angoticModal').style.display = 'flex';
};
/** END ESTRUTURA MODAL SUCCESS */


/** ESTRUTURA Cyberdrill */
document.addEventListener('click', function (e) {
    if (e.target.matches('[data-close-modal]')) {
        const modal = document.getElementById('angoticCyberDrillModal');
        if (modal) {
            modal.style.display = 'none';
        }
    }
});
window.onload = function () {
    document.getElementById('angoticCyberDrillModal').style.display = 'flex';
};
/** END ESTRUTURA CyberDrill */


/** ESTRUTURA HelpCenter Investor */
document.addEventListener('click', function (e) {
    if (e.target.matches('[data-close-modal]')) {
        const modal = document.getElementById('angoticInvestor');
        if (modal) {
            modal.style.display = 'none';
        }
    }
});
window.onload = function () {
    document.getElementById('angoticInvestor').style.display = 'flex';
};
/** END ESTRUTURA HelpCenter Investor */


/** ESTRUTURA HelpCenter Entrepeneur */
document.addEventListener('click', function (e) {
    if (e.target.matches('[data-close-modal]')) {
        const modal = document.getElementById('entrepeneur');
        if (modal) {
            modal.style.display = 'none';
        }
    }
});
window.onload = function () {
    document.getElementById('entrepeneur').style.display = 'flex';
};
/** END ESTRUTURA HelpCenter Entrepeneur */



/** ESTRUTURA MODAL FORM*/
document.addEventListener('DOMContentLoaded', function () {

    const modal = document.getElementById('angoticFormModal');
    const plafondSelect = document.getElementById('plafond');

    const optionsMap = {
        "PARTICIPANTE-VIP": [
            "PARTICIPANTE VIP DIAMANTE",
            "PARTICIPANTE VIP PLATINUM"
        ],
        "PARTICIPANTE": [
            "PARTICIPANTE GOLD",
            "PARTICIPANTE SILVER",
            "PARTICIPANTE ESTUDANTE"
        ]
    };

    // Abrir modal
    document.querySelectorAll('.open-form-modal').forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();

            const hash = this.getAttribute('href').replace('#', '');

            // Limpa options
            plafondSelect.innerHTML = '<option value="" disabled selected>Selecione...</option>';

            if (optionsMap[hash]) {
                optionsMap[hash].forEach(option => {
                    const opt = document.createElement('option');
                    opt.value = option;
                    opt.textContent = option;
                    plafondSelect.appendChild(opt);
                });
            }

            modal.style.display = 'flex';
        });
    });

    // Fechar modal
    document.addEventListener('click', function (e) {
        if (e.target.matches('[data-close-form]')) {
            modal.style.display = 'none';
        }
    });

});

