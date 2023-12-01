//Carrinho
document.addEventListener("DOMContentLoaded", function() {
  const quantidades = document.querySelectorAll(".quantidade");
  const totalPreco = document.getElementById("totalPreco");
  const formaPagamento = document.getElementById("formaPagamento");
  const escolhasModelos = document.querySelectorAll("#escolhaModelos");
  const precos = document.querySelectorAll(".preco");

  const catalogoProdutos = {
    "iphone13": 3951.57,
    "iphone14": 4599.00,
    "iphone15": 7289.10,
    "galaxys21": 2999.90,
    "galaxys22": 3875.99,
    "galaxys23": 4649.00,
    "xiaomi11": 995.00,
    "xiaomi12": 2799.00,
    "xiaomi13": 4589.00
  };

  let total = 0;

  function calcularTotal() {
    total = 0;
    let index = 0;
    quantidades.forEach(function(quantidade, i) {
      const nomeProduto = escolhasModelos[i].value;
      const precoProduto = catalogoProdutos[nomeProduto];
      const precoTotal = parseInt(quantidade.value) * precoProduto;
      total += precoTotal;
      precos[index].innerText = `R$ ${precoTotal.toFixed(2)}`;
      index++;
    });
    totalPreco.innerText = `Total: R$ ${total.toFixed(2)}`;
  }

  quantidades.forEach(function(quantidade) {
    quantidade.addEventListener("input", calcularTotal);
  });

  escolhasModelos.forEach(function(escolhaModelo) {
    escolhaModelo.addEventListener("change", calcularTotal);
  });

  formaPagamento.addEventListener("change", function() {
    console.log(`Forma de pagamento selecionada: ${formaPagamento.value}`);
  });
});