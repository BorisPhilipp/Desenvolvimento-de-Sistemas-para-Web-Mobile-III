//teste.cy.js nome orignal do arquivo
//alterar vite.config.js para o ip 127.0.0.1


describe('Teste de Registro de Usuário', () => {
  // 1. Definindo a baseUrl corretamente
  const baseUrl = 'http://127.0.0.1:8000'; // ou seu URL base

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

    const novo_item = {
        produto: 'Apontador de Prego',
        valor: '19,99',
        vencimento: '2025-06-22',
        situacao: 'Pendente'
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
    cy.contains('a','Cadastrar').click();
    cy.get('input[name="nome"]').should('be.visible').type(item.produto);
    cy.get('input[name="valor"]').type(item.valor);
    cy.get('input[name="vencimento"]').type(item.vencimento);
    cy.get('select[name="situacao_conta_id"]').select(item.situacao);
    cy.screenshot('3-pagina-cadastro-produto');

    cy.get('button').contains('Cadastrar').click();

    //Editar Produto
    //cy.visit(`${baseUrl}/index-conta`);
    cy.get('button').contains('OK').click();

    cy.screenshot('4-pagina-produto-cadastrado');

    cy.contains('a','Listar').click();

    cy.screenshot('5-pagina-produto-editar');

    cy.contains('a', 'Editar').click();

    cy.screenshot('6-pagina-editar-produto');

    cy.get('input[name="nome"]').should('be.visible').type('{selectall}').type(novo_item.produto);
    cy.get('input[name="valor"]').type('{selectall}').type(novo_item.valor);
    cy.get('input[name="vencimento"]').type(novo_item.vencimento);
    cy.get('select[name="situacao_conta_id"]').select(novo_item.situacao);

    cy.screenshot('7-pagina-editar-final');

    cy.get('button').contains('Salvar').click();

    cy.screenshot('8-pagina-editar-editado');

    cy.get('button').contains('OK').click();

    cy.contains('a','Listar').click();

    cy.screenshot('9-pagina-excluir-produto');

    cy.get('button').contains('Apagar').click();

    cy.screenshot('10-pagina-excluir-sucesso');

    cy.get('button').contains('OK').click();

    cy.screenshot('11-pagina-excluir-fim');

    cy.visit('https://www.youtube.com/watch?v=dQw4w9WgXcQ&pp=ygUJcmljayByb2xs')


    // Verifica se não há mensagens de erro
    cy.get('.alert-error').should('not.exist');

  });
});
