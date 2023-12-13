    document.addEventListener("DOMContentLoaded", function () {
        // Get span elements to display totals
        const contElt = document.querySelector('.cont');
        const fragilElt = document.querySelector('.fragil');
        const geralElt = document.querySelector('.geral');
        const perigosaElt = document.querySelector('.perigosa');
        const totalElt = document.querySelector('.total');

        // Get all rows from the table
        const rows = document.querySelectorAll('tbody tr');

        let contTotal = 0;
        let fragilTotal = 0;
        let geralTotal = 0;
        let perigosaTotal = 0;

        // Iterate over the rows and calculate totals
        rows.forEach(function (row) {
            // Get cargo type and value from the row
            const tipo = row.children[3].textContent.trim();
            const valor = parseFloat(row.children[2].textContent.trim().replace('R$ ', '').replace('.', '').replace(',', '.'));

            // Update totals based on cargo type
            switch (tipo) {
                case 'Contêiner':
                    contTotal += valor;
                    break;
                case 'Frágil':
                    fragilTotal += valor;
                    break;
                case 'Geral':
                    geralTotal += valor;
                    break;
                case 'Perigosa':
                    perigosaTotal += valor;
                    break;
            }
        });

        // Update span elements with formatted totals
        contElt.textContent = contTotal.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
        fragilElt.textContent = fragilTotal.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
        geralElt.textContent = geralTotal.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
        perigosaElt.textContent = perigosaTotal.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });

        // Calculate and update the total for all cargo types
        const totalGeral = contTotal + fragilTotal + geralTotal + perigosaTotal;
        totalElt.textContent = totalGeral.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
    });

    
