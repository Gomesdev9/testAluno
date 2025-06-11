<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lição 1: O que é PHP e como funciona - Aprenda PHP</title>
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
        
        .concept-box {
            background: #f0f8ff;
            border-left: 4px solid #667eea;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
        }
        
        .example-box {
            background: #2d3748;
            color: #e2e8f0;
            padding: 20px;
            border-radius: 12px;
            margin: 20px 0;
            font-family: 'Courier New', monospace;
        }
        
        .tip-box {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
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
        
        .nav-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
    </style>
</head>

<body>
    <div class="lesson-container">
        <a href="../index.php" class="back-button">
            ← Voltar ao Menu Principal
        </a>

        <div class="lesson-header">
            <h1>📚 Lição 1: O que é PHP e como funciona</h1>
            <p>Fundamentos - Módulo 1</p>
        </div>

        <div class="lesson-content">
            <h2>🎯 Objetivos da Lição</h2>
            <ul>
                <li>Entender o que é PHP</li>
                <li>Conhecer a história e evolução do PHP</li>
                <li>Compreender como PHP funciona</li>
                <li>Identificar onde PHP é usado</li>
            </ul>

            <h2>🤔 O que é PHP?</h2>
            <div class="concept-box">
                <h3>💡 Definição</h3>
                <p><strong>PHP</strong> (PHP: Hypertext Preprocessor) é uma linguagem de programação de código aberto, 
                especialmente adequada para desenvolvimento web e que pode ser embarcada dentro do HTML.</p>
            </div>

            <h3>📈 História do PHP</h3>
            <ul>
                <li><strong>1994:</strong> Criado por Rasmus Lerdorf</li>
                <li><strong>1995:</strong> Primeira versão pública (Personal Home Page)</li>
                <li><strong>1997:</strong> PHP 3 - Reescrito por Andi Gutmans e Zeev Suraski</li>
                <li><strong>2000:</strong> PHP 4 - Introdução do Zend Engine</li>
                <li><strong>2004:</strong> PHP 5 - Orientação a objetos melhorada</li>
                <li><strong>2015:</strong> PHP 7 - Melhoria significativa de performance</li>
                <li><strong>2020:</strong> PHP 8 - Novas funcionalidades modernas</li>
            </ul>

            <h2>⚙️ Como PHP Funciona?</h2>
            
            <div class="concept-box">
                <h3>🔄 Processo de Execução</h3>
                <ol>
                    <li><strong>Cliente faz solicitação:</strong> Browser solicita uma página .php</li>
                    <li><strong>Servidor processa:</strong> Servidor web executa o código PHP</li>
                    <li><strong>Gera HTML:</strong> PHP produz HTML como resultado</li>
                    <li><strong>Envia resposta:</strong> HTML é enviado de volta ao browser</li>
                </ol>
            </div>

            <h3>🖥️ Exemplo Prático</h3>
            <div class="example-box">
<pre><code>&lt;?php
// Este código PHP é executado no servidor
$nome = "João";
$idade = 25;
$data_atual = date("Y-m-d");

echo "&lt;h1&gt;Olá, " . $nome . "!&lt;/h1&gt;";
echo "&lt;p&gt;Você tem " . $idade . " anos.&lt;/p&gt;";
echo "&lt;p&gt;Hoje é: " . $data_atual . "&lt;/p&gt;";
?&gt;</code></pre>
            </div>

            <div class="tip-box">
                <h4>💡 Resultado no Browser:</h4>
                <div style="background: white; padding: 15px; border-radius: 6px; margin-top: 10px;">
                    <h1 style="color: #333; margin: 0;">Olá, João!</h1>
                    <p style="margin: 5px 0;">Você tem 25 anos.</p>
                    <p style="margin: 5px 0;">Hoje é: 2025-06-11</p>
                </div>
            </div>

            <h2>🌟 Características do PHP</h2>
            <div class="concept-box">
                <ul>
                    <li><strong>Gratuito e Open Source:</strong> Sem custos de licença</li>
                    <li><strong>Multiplataforma:</strong> Roda em Windows, Linux, macOS</li>
                    <li><strong>Fácil de aprender:</strong> Sintaxe simples e intuitiva</li>
                    <li><strong>Grande comunidade:</strong> Muito suporte e recursos</li>
                    <li><strong>Integração com bancos:</strong> MySQL, PostgreSQL, MongoDB</li>
                    <li><strong>Frameworks robustos:</strong> Laravel, Symfony, CodeIgniter</li>
                </ul>
            </div>

            <h2>🚀 Onde PHP é Usado?</h2>
            <h3>Sites Famosos que Usam PHP:</h3>
            <ul>
                <li><strong>Facebook:</strong> Rede social mais popular do mundo</li>
                <li><strong>Wikipedia:</strong> Enciclopédia online</li>
                <li><strong>WordPress:</strong> 40% dos sites da internet</li>
                <li><strong>Slack:</strong> Plataforma de comunicação</li>
                <li><strong>Etsy:</strong> Marketplace de produtos artesanais</li>
            </ul>

            <h2>📝 Atividade Prática</h2>
            <div class="tip-box">
                <h4>🎯 Exercício:</h4>
                <p>Tente identificar em quais situações você usaria PHP:</p>
                <ol>
                    <li>Criar um blog pessoal</li>
                    <li>Desenvolver um e-commerce</li>
                    <li>Fazer um sistema de login</li>
                    <li>Conectar com banco de dados</li>
                </ol>
                <p><strong>Resposta:</strong> Em todas! PHP é ideal para qualquer aplicação web.</p>
            </div>

            <h2>📚 Resumo da Lição</h2>
            <div class="concept-box">
                <ul>
                    <li>PHP é uma linguagem server-side para desenvolvimento web</li>
                    <li>É executado no servidor, não no navegador do usuário</li>
                    <li>É gratuito, open-source e tem grande comunidade</li>
                    <li>É usado por milhões de sites ao redor do mundo</li>
                    <li>É uma excelente escolha para iniciantes em programação web</li>
                </ul>
            </div>

            <div class="navigation-buttons">
                <a href="../index.php" class="nav-btn">← Menu Principal</a>
                <a href="./licao2-configurando-ambiente.php" class="nav-btn">Próxima Lição →</a>
            </div>
        </div>
    </div>

    <script>
        // Marca a lição como concluída
        document.addEventListener('DOMContentLoaded', function() {
            // Simula progresso da lição
            console.log('Lição 1 carregada com sucesso!');
        });
    </script>
</body>

</html>