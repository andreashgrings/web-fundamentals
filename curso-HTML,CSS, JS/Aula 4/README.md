-Os dados dos formumlários precisam ser enviados para algum lugar,
o envio destes dados pode ser feito de duas formas (métodos);

-O tipo do método que será enviado para o backend deve ser alinhado entre os desenvolvedores; 
-O backend precisa estar reparado para receber a requisição (request);

-Via GET:
*Os dados são enviados de forma exposta via URL do navegador como variáveis para o backend; 
*Logo, não é usado para envio de dados sensíveis (ex.: número do cartão de crédito, senhas, etc.).

Ex.: file:///C:/Users/felip/Documents/web-fundamentals/curso-HTML,CSS,%20JS/Aula%204/Formul%C3%A1rio%201.html?Nome=&endereco=&cidade=EST&senha=&descricao=
Prós:
*os dados ficam salvos no histórico do navegador;
*É possível compartilhar a URL com os dados de outras pessoas.

Contras:
Os dados ficam salvos no históricos, se outra pessa acessar o mesmo browser no computador; 
conseguirá ver os dados que foram enviados;
Existe um limite de tamanho de dados que podem ser enviados via URL.

-Via POST:
*Os dados são enviados de forma sigilosa, imagine que eles são enviados por meio da porta dos fundos 
do backend.

Prós:
*São enviados de forma segura;
*Não ficam armazenados no histórico do browser; 
*Não existe limite de tamanho dos dados a serem enviados(desde que o servidor que os receba os comporte);
*Aceita o envio de anexos.

Contras: 
*Não ficam armazenados no histórico do browser.

-Maxlength limita o tamanho que um campo pode ter quando colocada alguma informação
