//teste.cy.js

describe('Teste de Registro de Usuário', () => {
  // 1. Definindo a baseUrl corretamente
  const baseUrl = 'http://172.32.90.38:8000'; // ou seu URL base

  it('Deve registrar um novo usuário com sucesso', () => {
    // 2. Dados do teste
    const user = {
      name: `Usuário ${Date.now()}`,
      email: `teste_${Date.now()}@exemplo.com`,
      password: "Senha@123",
      confirmacao: "Senha@123"
    };

    const item = {
      produto: 'Graxa em Pó',
      valor: '10,00',
      vencimento: '2001-09-11',
      situacao: 'Paga'
    };

    // 3. Visita a página de registro
    cy.visit(`${baseUrl}/register`);
    // 4. Preenche o formulário (ajuste os seletores conforme seu HTML real)
    
    cy.get('input[name="name"]').should('be.visible').type(user.name);
    cy.get('input[name="email"]').type(user.email);
    cy.get('input[name="password"]').type(user.password);
    cy.get('input[name="password_confirmation"]').type(user.password);
    cy.screenshot('1-pagina-registro-inicial');

    cy.get('button[type="submit"]').click();
    // 5. Submete o formulário

    // 6. Verificações pós-registro

    cy.url().should('match', /(index-conta|login)/, { timeout: 10000 });

    cy.screenshot('2-pagina-dashboard');



    //Adicionar Produto
    cy.contains('Cadastrar');
    cy.get('input[name="nome"]').should('be.visible').type(item.produto);
    cy.get('input[name="valor"]').type(item.valor);
    cy.get('input[name="vencimento"]').type(item.vencimento);
    cy.get('select[name="situacao_conta_id"]').select(item.situacao).should('have.value', '1');
    cy.screenshot('3-pagina-cadastro-produto');

    cy.get('button').contains('Cadastrar').click();

    //Editar Produto
    cy.visit(`${baseUrl}/index-conta`);




    // Verifica se não há mensagens de erro
    cy.get('.alert-error').should('not.exist');

  });
});
