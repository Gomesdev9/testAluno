<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lição 2: Configurando o Ambiente - Aprenda PHP</title>
    <link rel="stylesheet" href="../assets/css/stylelica2.css">
</head>

<body>
    <div class="floating-elements"></div>

    <div class="lesson-container">
        <div class="progress-bar">
            <div class="progress-fill"></div>
        </div>

        <a href="../index.php" class="back-button">
            ← Voltar ao Menu Principal
        </a>

        <div class="lesson-header">
            <h1>⚙️ Lição 2: Configurando o Ambiente</h1>
            <p>Fundamentos - Módulo 1</p>
        </div>

        <div class="lesson-content">
            <h2>🎯 Objetivos da Lição</h2>
            <ul>
                <li>Instalar um servidor local para PHP</li>
                <li>Configurar o ambiente de desenvolvimento</li>
                <li>Testar se PHP está funcionando</li>
                <li>Conhecer as ferramentas essenciais</li>
            </ul>

            <h2>💻 Opções de Ambiente</h2>
            <p>Para programar em PHP, você precisa de um servidor web. Aqui estão as melhores opções:</p>

            <div class="option-cards">
                <div class="option-card" onclick="selectOption('xampp')">
                    <h3>🚀 XAMPP</h3>
                    <p><strong>Recomendado para iniciantes</strong></p>
                    <ul>
                        <li>Apache + MySQL + PHP</li>
                        <li>Interface gráfica fácil</li>
                        <li>Windows, Mac, Linux</li>
                        <li>Gratuito</li>
                    </ul>
                </div>

                <div class="option-card" onclick="selectOption('wamp')">
                    <h3>⚡ WAMP/MAMP</h3>
                    <p><strong>Alternativa popular</strong></p>
                    <ul>
                        <li>WAMP (Windows)</li>
                        <li>MAMP (Mac)</li>
                        <li>Interface simples</li>
                        <li>Configuração automática</li>
                    </ul>
                </div>

                <div class="option-card" onclick="selectOption('docker')">
                    <h3>🐳 Docker</h3>
                    <p><strong>Para desenvolvedores avançados</strong></p>
                    <ul>
                        <li>Ambiente isolado</li>
                        <li>Portabilidade</li>
                        <li>Configuração customizada</li>
                        <li>Curva de aprendizado</li>
                    </ul>
                </div>
            </div>

            <h2>📥 Instalando XAMPP (Recomendado)</h2>

            <div class="installation-stepper">
                <div class="step-item" data-step="1">1</div>
                <div class="step-item" data-step="2">2</div>
                <div class="step-item" data-step="3">3</div>
                <div class="step-item" data-step="4">4</div>
            </div>

            <div class="step-box" id="step-1">
                <h3>Passo 1: Download</h3>
                <ol>
                    <li>Acesse: <strong>https://www.apachefriends.org</strong></li>
                    <li>Baixe a versão para seu sistema operacional</li>
                    <li>Escolha a versão mais recente do PHP</li>
                </ol>
                <button class="test-button" onclick="completeStep(1)">Passo Concluído</button>
            </div>

            <div class="step-box" id="step-2">
                <h3>Passo 2: Instalação</h3>
                <ol>
                    <li>Execute o arquivo baixado</li>
                    <li>Escolha os componentes: <strong>Apache, MySQL, PHP, phpMyAdmin</strong></li>
                    <li>Instale no diretório padrão (C:\xampp no Windows)</li>
                    <li>Finalize a instalação</li>
                </ol>
                <button class="test-button" onclick="completeStep(2)">Passo Concluído</button>
            </div>

            <div class="step-box" id="step-3">
                <h3>Passo 3: Iniciando os Serviços</h3>
                <ol>
                    <li>Abra o XAMPP Control Panel</li>
                    <li>Clique em <strong>"Start"</strong> no Apache</li>
                    <li>Clique em <strong>"Start"</strong> no MySQL</li>
                    <li>Os status devem ficar verdes</li>
                </ol>
                <button class="test-button" onclick="completeStep(3)">Passo Concluído</button>
            </div>

            <div class="step-box" id="step-4">
                <h3>Passo 4: Verificação</h3>
                <p>Teste se tudo está funcionando corretamente</p>
                <button class="test-button" onclick="completeStep(4)">Passo Concluído</button>
            </div>

            <div class="warning-box">
                <h4>⚠️ Problemas Comuns:</h4>
                <ul>
                    <li><strong>Porta 80 ocupada:</strong> Outro software pode estar usando (Skype, IIS)</li>
                    <li><strong>Antivírus:</strong> Pode bloquear o Apache, adicione exceção</li>
                    <li><strong>Firewall:</strong> Permita o Apache no firewall do Windows</li>
                </ul>
            </div>

            <h2>🧪 Testando a Instalação</h2>

            <div class="interactive-test">
                <h3>Teste Interativo</h3>
                <p>Clique nos botões para testar cada componente:</p>
                <button class="test-button" onclick="testComponent('apache')">Testar Apache</button>
                <button class="test-button" onclick="testComponent('php')">Testar PHP</button>
                <button class="test-button" onclick="testComponent('mysql')">Testar MySQL</button>
                <div class="test-result" id="test-result"></div>
            </div>

            <div class="step-box">
                <h3>Teste 1: Apache Funcionando</h3>
                <ol>
                    <li>Abra seu navegador</li>
                    <li>Digite: <code>http://localhost</code></li>
                    <li>Deve aparecer a página de boas-vindas do XAMPP</li>
                </ol>
            </div>

            <div class="step-box">
                <h3>Teste 2: PHP Funcionando</h3>
                <ol>
                    <li>Vá até a pasta: <code>C:\xampp\htdocs</code></li>
                    <li>Crie um arquivo: <code>teste.php</code></li>
                    <li>Adicione o seguinte código:</li>
                </ol>

                <div class="command-box">
                    &lt;?php
                    phpinfo();
                    ?&gt;
                </div>

                <ol start="4">
                    <li>Salve o arquivo</li>
                    <li>No navegador, acesse: <code>http://localhost/teste.php</code></li>
                    <li>Deve aparecer uma página com informações do PHP</li>
                </ol>
            </div>

            <div class="success-box">
                <h4>✅ Se você viu a página com informações do PHP, parabéns!</h4>
                <p>Seu ambiente está configurado e funcionando perfeitamente!</p>
            </div>

            <h2>📝 Editor de Código</h2>
            <p>Para escrever código PHP, você precisa de um bom editor. Recomendações:</p>

            <div class="option-cards">
                <div class="option-card" onclick="selectEditor('vscode')">
                    <h3>🆚 Visual Studio Code</h3>
                    <p><strong>Mais popular</strong></p>
                    <ul>
                        <li>Gratuito</li>
                        <li>Extensões para PHP</li>
                        <li>Syntax highlighting</li>
                        <li>Depuração integrada</li>
                    </ul>
                </div>

                <div class="option-card" onclick="selectEditor('phpstorm')">
                    <h3>💡 PHPStorm</h3>
                    <p><strong>IDE completa</strong></p>
                    <ul>
                        <li>Pago (30 dias grátis)</li>
                        <li>Funcionalidades avançadas</li>
                        <li>Refactoring automático</li>
                        <li>Integração com frameworks</li>
                    </ul>
                </div>

                <div class="option-card" onclick="selectEditor('sublime')">
                    <h3>📝 Sublime Text</h3>
                    <p><strong>Leve e rápido</strong></p>
                    <ul>
                        <li>Interface minimalista</li>
                        <li>Performance excelente</li>
                        <li>Plugins disponíveis</li>
                        <li>Licença paga</li>
                    </ul>
                </div>
            </div>

            <h2>🔧 Configurações Importantes</h2>

            <div class="step-box">
                <h3>Habilitando Exibição de Erros</h3>
                <p>Para desenvolvimento, é importante ver os erros PHP:</p>
                <ol>
                    <li>Localize o arquivo: <code>C:\xampp\php\php.ini</code></li>
                    <li>Procure por: <code>display_errors</code></li>
                    <li>Altere para: <code>display_errors = On</code></li>
                    <li>Reinicie o Apache no XAMPP</li>
                </ol>
            </div>

            <h2>📁 Estrutura de Pastas</h2>
            <div class="command-box">
                C:\xampp\
                ├── htdocs\ ← Seus arquivos PHP ficam aqui
                ├── php\ ← Configurações do PHP
                ├── apache\ ← Configurações do Apache
                ├── mysql\ ← Banco de dados MySQL
                └── phpMyAdmin\ ← Interface web para MySQL
            </div>

            <div class="warning-box">
                <h4>💡 Dica Importante:</h4>
                <p>Todos os seus projetos PHP devem ficar dentro da pasta <strong>htdocs</strong>.
                    Crie uma pasta para cada projeto dentro de htdocs.</p>
            </div>

            <h2>✅ Checklist Final</h2>
            <div class="success-box">
                <h4>Verifique se você tem:</h4>
                <ul class="checklist">
                    <li data-check="xampp">XAMPP instalado e funcionando</li>
                    <li data-check="services">Apache e MySQL iniciados</li>
                    <li data-check="localhost">Página localhost carregando</li>
                    <li data-check="php">PHP funcionando (teste com phpinfo())</li>
                    <li data-check="editor">Editor de código instalado</li>
                    <li data-check="errors">Erros PHP habilitados</li>
                </ul>
            </div>

            <div class="navigation-buttons">
                <a href="./licao1-o-que-e-php.php" class="nav-btn">← Lição Anterior</a>
                <a href="./licao3-primeiro-codigo.php" class="nav-btn">Próxima Lição →</a>
            </div>
        </div>
    </div>