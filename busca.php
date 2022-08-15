<h3> Cotação moeda</h3>

<div>
    <p>Compra: <span id="bid"> </span> </p>
    <p>Venda: <span id="ask"> </span> </p>
    <p>Máximo: <span id="high"> </span> </p>
  <p>Mínimo: <span id="low"> </span> </p>
</div>

<script>
    const cep = document.querySelector("#cep");

    document.querySelector("#buscar").addEventListener('click', function(){
        const opcoes = {
            method:"GET",
            mode:"cors",
            cache:"default"
        }

        fetch(`http://economia.awesomeapi.com.br/json/last/USD-BRL`, opcoes)
        .then(
            response=>{ response.json()
            .then(data => {
              document.querySelector("#compra").textContent = data['USDBRL'] ['bid'];
              document.querySelector("#venda").textContent = data['USDBRL'] ['ask'];
              document.querySelector("#maximo").textContent = data['USDBRL'] ['high'];
              document.querySelector("#minimo").textContent = data['USDBRL'] ['low'];
            });
            }
        )
        
    });
    
</script>
