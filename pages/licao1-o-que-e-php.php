<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lição 1: O que é PHP e como funciona - Aprenda PHP</title>
    <link rel="stylesheet" href="../assets/css/stylelicao1.css">
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

            <h2>📈 História do PHP</h2>
            <div class="interactive-timeline">
                <div class="timeline-item" onclick="showDetails(1994)">
                    <span class="timeline-year">1994:</span>
                    <span>Criado por Rasmus Lerdorf</span>
                </div>
                <div class="timeline-item" onclick="showDetails(1995)">
                    <span class="timeline-year">1995:</span>
                    <span>Primeira versão pública (Personal Home Page)</span>
                </div>
                <div class="timeline-item" onclick="showDetails(1997)">
                    <span class="timeline-year">1997:</span>
                    <span>PHP 3 - Reescrito por Andi Gutmans e Zeev Suraski</span>
                </div>
                <div class="timeline-item" onclick="showDetails(2000)">
                    <span class="timeline-year">2000:</span>
                    <span>PHP 4 - Introdução do Zend Engine</span>
                </div>
                <div class="timeline-item" onclick="showDetails(2004)">
                    <span class="timeline-year">2004:</span>
                    <span>PHP 5 - Orientação a objetos melhorada</span>
                </div>
                <div class="timeline-item" onclick="showDetails(2015)">
                    <span class="timeline-year">2015:</span>
                    <span>PHP 7 - Melhoria significativa de performance</span>
                </div>
                <div class="timeline-item" onclick="showDetails(2020)">
                    <span class="timeline-year">2020:</span>
                    <span>PHP 8 - Novas funcionalidades modernas</span>
                </div>
            </div>

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

            <h2>🖥️ Exemplo Prático</h2>
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
                    <p style="margin: 5px 0;">Hoje é: 2025-01-15</p>
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
            <div class="concept-box">
                <h3>Sites Famosos que Usam PHP:</h3>
                <div class="animated-counter" id="sites-counter">40%</div>
                <p>dos sites da internet usam PHP!</p>
                <ul>
                    <li><strong>Facebook:</strong> Rede social mais popular do mundo</li>
                    <li><strong>Wikipedia:</strong> Enciclopédia online</li>
                    <li><strong>WordPress:</strong> 40% dos sites da internet</li>
                    <li><strong>Slack:</strong> Plataforma de comunicação</li>
                    <li><strong>Etsy:</strong> Marketplace de produtos artesanais</li>
                </ul>
            </div>

            <h2>🧠 Quiz Interativo</h2>
            <div class="quiz-section">
                <div class="quiz-question">
                    Qual é o significado da sigla PHP?
                </div>
                <ul class="quiz-options">
                    <li onclick="selectAnswer(this, false)">Personal Home Page</li>
                    <li onclick="selectAnswer(this, true)">PHP: Hypertext Preprocessor</li>
                    <li onclick="selectAnswer(this, false)">Private Home Protocol</li>
                    <li onclick="selectAnswer(this, false)">Public HTTP Parser</li>
                </ul>
            </div>

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

<script src="../assets/js/licao1.js"></script>
</body>

</html>