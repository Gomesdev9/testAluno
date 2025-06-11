<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lição 2: Configurando o Ambiente - Aprenda PHP</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .lesson-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .lesson-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .lesson-content {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #667eea;
            color: white;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 8px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        
        .back-button:hover {
            background: #5a67d8;
            transform: translateY(-2px);
        }
        
        .step-box {
            background: #f0f8ff;
            border-left: 4px solid #667eea;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
        }
        
        .command-box {
            background: #2d3748;
            color: #e2e8f0;
            padding: 15px;
            border-radius: 8px;
            font-family: 'Courier New', monospace;
            margin: 10px 0;
        }
        
        .warning-box {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
        }
        
        .success-box {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
        }
        
        .option-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
        
        .option-card {
            background: white;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .option-card:hover {
            border-color: #667eea;
            transform: translateY(-5px);
        }
        
        .navigation-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }
        
        .nav-btn {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }
        
        .nav-btn:hover {
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <div class="lesson-container">
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
                <div class="option-card">
                    <h3>🚀 XAMPP</h3>
                    <p><strong>Recomendado para iniciantes</strong></p>
                    <ul style="text-align: left;">
                        <li>Apache + MySQL + PHP</li>
                        <li>Interface gráfica fácil</li>
                        <li>Windows, Mac, Linux</li>
                        <li>Gratuito</li>
                    </ul>
                </div>

                <div class="option-card">
                    <h3>⚡ WAMP/MAMP</h3>
                    <p><strong>Alternativa popular</strong></p>
                    <ul style="text-align: left;">
                        <li>WAMP (Windows)</li>
                        <li>MAMP (Mac)</li>
                        <li>Interface simples</li>
                        <li>Configuração automática</li>
                    </ul>
                </div>

                <div class="option-card">
                    <h3>🐳 Docker</h3>
                    <p><strong>Para desenvolvedores avançados</strong></p>
                    <ul style="text-align: left;">
                        <li>Ambiente isolado</li>
                        <li>Portabilidade</li>
                        <li>Configuração customizada</li>
                        <li>Curva de aprendizado</li>
                    </ul>
                </div>
            </div>

            <h2>📥 Instalando XAMPP (Recomendado)</h2>

            <div class="step-box">
                <h3>Passo 1: Download</h3>
                <ol>
                    <li>Acesse: <strong>https://www.apachefriends.org</strong></li>
                    <li>Baixe a versão para seu sistema operacional</li>
                    <li>Escolha a versão mais recente do PHP</li>
                </ol>
            </div>

            <div class="step-box">
                <h3>Passo 2: Instalação</h3>
                <ol>
                    <li>Execute o arquivo baixado</li>
                    <li>Escolha os componentes: <strong>Apache, MySQL, PHP, phpMyAdmin</strong></li>
                    <li>Instale no diretório padrão (C:\xampp no Windows)</li>
                    <li>Finalize a instalação</li>
                </ol>
            </div>

            <div class="step-box">
                <h3>Passo 3: Iniciando os Serviços</h3>
                <ol>
                    <li>Abra o XAMPP Control Panel</li>
                    <li>Clique em <strong>"Start"</strong> no Apache</li>
                    <li>Clique em <strong>"Start"</strong> no MySQL</li>
                    <li>Os status devem ficar verdes</li>
                </ol>
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
                <div class="option-card">
                    <h3>🆚 Visual Studio Code</h3>
                    <p><strong>Mais popular</strong></p>
                    <ul style="text-align: left;">
                        <li>Gratuito</li>
                        <li>Extensões para PHP</li>
                        <li>Syntax highlighting</li>
                        <li>Depuração integrada</li>
                    </ul>
                </div>

                <div class="option-card">
                    <h3>💡 PHPStorm</h3>
                    <p><strong>IDE completa</strong></p>
                    <ul style="text-align: left;">
                        <li>Pago (30 dias grátis)</li>
                        <li>Funcionalidades avançadas</li>
                        <li>Refactoring automático</li>
                        <li>Integração com frameworks</li>
                    </ul>
                </div>

                <div class="option-card">
                    <h3>📝 Sublime Text</h3>
                    <p><strong>Leve e rápido</strong></p>
                    <ul style="text-align: left;">
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
├── htdocs\          ← Seus arquivos PHP ficam aqui
├── php\             ← Configurações do PHP
├── apache\          ← Configurações do Apache
├── mysql\           ← Banco de dados MySQL
└── phpMyAdmin\      ← Interface web para MySQL
            </div>

            <div class="warning-box">
                <h4>💡 Dica Importante:</h4>
                <p>Todos os seus projetos PHP devem ficar dentro da pasta <strong>htdocs</strong>. 
                Crie uma pasta para cada projeto dentro de htdocs.</p>
            </div>

            <h2>✅ Checklist Final</h2>
            <div class="success-box">
                <h4>Verifique se você tem:</h4>
                <ul>
                    <li>☑️ XAMPP instalado e funcionando</li>
                    <li>☑️ Apache e MySQL iniciados</li>
                    <li>☑️ Página localhost carregando</li>
                    <li>☑️ PHP funcionando (teste com phpinfo())</li>
                    <li>☑️ Editor de código instalado</li>
                    <li>☑️ Erros PHP habilitados</li>
                </ul>
            </div>

            <div class="navigation-buttons">
                <a href="./licao1-o-que-e-php.php" class="nav-btn">← Lição Anterior</a>
                <a href="./licao3-primeiro-codigo.php" class="nav-btn">Próxima Lição →</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Lição 2 - Configurando Ambiente carregada!');
            
            // Adiciona interatividade aos cards
            const cards = document.querySelectorAll('.option-card');
            cards.forEach(card => {
                card.addEventListener('click', function() {
                    this.style.backgroundColor = '#f0f8ff';
                    setTimeout(() => {
                        this.style.backgroundColor = 'white';
                    }, 200);
                });
            });
        });
    </script>
</body>

</html>