<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprenda PHP - Do Básico ao Avançado</title>
    <link rel="stylesheet" href="./assets/css/styleIndex.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>🚀 Aprenda PHP</h1>
            <p>Do básico ao avançado - Programação para iniciantes</p>
        </header>

        <div class="main-content">
            <div class="card">
                <h2>
                    <div class="icon">📚</div>
                    Módulo 1: Fundamentos
                </h2>
                <ul class="lesson-list">
                    <li class="lesson-item" onclick="selectLesson(1)">
                        <div class="lesson-number">1</div>
                        <div>O que é PHP e como funciona</div>
                    </li>
                    <li class="lesson-item" onclick="selectLesson(2)">
                        <div class="lesson-number">2</div>
                        <div>Configurando o ambiente</div>
                    </li>
                    <li class="lesson-item" onclick="selectLesson(3)">
                        <div class="lesson-number">3</div>
                        <div>Primeiro código PHP</div>
                    </li>
                    <li class="lesson-item" onclick="selectLesson(4)">
                        <div class="lesson-number">4</div>
                        <div>Variáveis e tipos de dados</div>
                    </li>
                </ul>
            </div>

            <div class="card">
                <h2>
                    <div class="icon">⚡</div>
                    Módulo 2: Estruturas
                </h2>
                <ul class="lesson-list">
                    <li class="lesson-item" onclick="selectLesson(5)">
                        <div class="lesson-number">5</div>
                        <div>Operadores e expressões</div>
                    </li>
                    <li class="lesson-item" onclick="selectLesson(6)">
                        <div class="lesson-number">6</div>
                        <div>Estruturas condicionais</div>
                    </li>
                    <li class="lesson-item" onclick="selectLesson(7)">
                        <div class="lesson-number">7</div>
                        <div>Loops e repetições</div>
                    </li>
                    <li class="lesson-item" onclick="selectLesson(8)">
                        <div class="lesson-number">8</div>
                        <div>Arrays e manipulação</div>
                    </li>
                </ul>
            </div>

            <div class="card">
                <h2>
                    <div class="icon">🔧</div>
                    Módulo 3: Avançado
                </h2>
                <ul class="lesson-list">
                    <li class="lesson-item" onclick="selectLesson(9)">
                        <div class="lesson-number">9</div>
                        <div>Funções personalizadas</div>
                    </li>
                    <li class="lesson-item" onclick="selectLesson(10)">
                        <div class="lesson-number">10</div>
                        <div>Trabalhando com formulários</div>
                    </li>
                    <li class="lesson-item" onclick="selectLesson(11)">
                        <div class="lesson-number">11</div>
                        <div>Banco de dados MySQL</div>
                    </li>
                    <li class="lesson-item" onclick="selectLesson(12)">
                        <div class="lesson-number">12</div>
                        <div>Sessões e cookies</div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="interactive-section">
            <div class="tab-buttons">
                <button class="tab-button active" onclick="showTab('overview')">📋 Visão Geral</button>
                <button class="tab-button" onclick="showTab('fundamentos')">📚 Fundamentos</button>
                <button class="tab-button" onclick="showTab('estruturas')">⚡ Estruturas</button>
                <button class="tab-button" onclick="showTab('avancado')">🔧 Avançado</button>
            </div>

            <!-- TAB VISÃO GERAL -->
            <div id="overview" class="lesson-content active">
                <h2>
                    <div class="icon">💻</div>
                    Exemplo Prático Inicial
                </h2>
                <p>Vamos começar com um exemplo simples de PHP:</p>

                <div class="code-preview">
                    <span class="php-tag">&lt;?php</span>
                    <span class="php-echo">echo</span> <span class="php-string">"Olá, mundo!"</span>;
                    <span class="php-echo">echo</span> <span class="php-string">"Bem-vindos ao curso de PHP!"</span>;

                    <span class="php-echo">$nome</span> = <span class="php-string">"João"</span>;
                    <span class="php-echo">$idade</span> = 25;

                    <span class="php-echo">echo</span> <span class="php-string">"Meu nome é "</span> . <span class="php-echo">$nome</span> . <span class="php-string">" e tenho "</span> . <span class="php-echo">$idade</span> . <span class="php-string">" anos."</span>;
                    <span class="php-tag">?&gt;</span>
                </div>

                <div class="progress-bar">
                    <div class="progress-fill" id="progressBar"></div>
                </div>

                <p id="progressText">Progresso: 0% completo</p>

                <button class="try-button" onclick="runExample()">▶️ Executar Exemplo</button>
                <button class="try-button" onclick="nextLesson()" style="margin-left: 10px;">📖 Próxima Lição</button>
            </div>

            <!-- TAB FUNDAMENTOS -->
            <div id="fundamentos" class="lesson-content">
                <h2>
                    <div class="icon">📚</div>
                    Módulo 1: Fundamentos do PHP
                </h2>

                <div class="exercise-box">
                    <div class="exercise-title">
                        🎯 Exercício 1: Seu Primeiro Echo
                    </div>
                    <p>Digite um código PHP que mostre uma mensagem personalizada:</p>
                    <textarea class="input-area" id="exercise1" placeholder='<?php echo "Sua mensagem aqui"; ?>'></textarea>
                    <button class="try-button" onclick="runExercise(1)">▶️ Testar Código</button>
                    <div class="result-box" id="result1"></div>
                </div>

                <div class="simulator">
                    <h3>🔬 Simulador de Variáveis</h3>
                    <p>Teste diferentes tipos de variáveis PHP:</p>
                    <div class="simulator-controls">
                        <input type="text" class="simulator-input" id="varName" placeholder="Nome da variável (ex: nome)" />
                        <select class="simulator-input" id="varType">
                            <option value="string">String</option>
                            <option value="int">Número Inteiro</option>
                            <option value="float">Número Decimal</option>
                            <option value="bool">Verdadeiro/Falso</option>
                        </select>
                        <input type="text" class="simulator-input" id="varValue" placeholder="Valor" />
                        <button class="try-button" onclick="createVariable()">Criar Variável</button>
                    </div>
                    <div id="variableResult" style="margin-top: 15px; font-family: monospace;"></div>
                </div>

                <div class="quiz-question">
                    <h4>❓ Quiz: O que significa PHP?</h4>
                    <div class="quiz-options">
                        <label class="quiz-option" onclick="checkAnswer(this, false)">
                            <input type="radio" name="q1" /> Personal Home Page
                        </label>
                        <label class="quiz-option" onclick="checkAnswer(this, true)">
                            <input type="radio" name="q1" /> PHP: Hypertext Preprocessor
                        </label>
                        <label class="quiz-option" onclick="checkAnswer(this, false)">
                            <input type="radio" name="q1" /> Private Homepage
                        </label>
                    </div>
                </div>
            </div>

            <!-- TAB ESTRUTURAS -->
            <div id="estruturas" class="lesson-content">
                <h2>
                    <div class="icon">⚡</div>
                    Módulo 2: Estruturas de Controle
                </h2>

                <div class="exercise-box">
                    <div class="exercise-title">
                        🎯 Exercício: Estrutura Condicional
                    </div>
                    <p>Crie um código que verifica se um número é maior que 10:</p>
                    <textarea class="input-area" id="exercise2" placeholder="<?php
                                                                                $numero = 15;
                                                                                if ($numero > 10) {
                                                                                    echo 'Número maior que 10';
                                                                                } else {
                                                                                    echo 'Número menor ou igual a 10';
                                                                                }
                                                                                ?>"></textarea>
                    <button class="try-button" onclick="runExercise(2)">▶️ Testar Código</button>
                    <div class="result-box" id="result2"></div>
                </div>

                <div class="simulator">
                    <h3>🔄 Simulador de Loops</h3>
                    <p>Veja como funcionam os loops em PHP:</p>
                    <div class="simulator-controls">
                        <select class="simulator-input" id="loopType">
                            <option value="for">Loop FOR</option>
                            <option value="while">Loop WHILE</option>
                            <option value="foreach">Loop FOREACH</option>
                        </select>
                        <input type="number" class="simulator-input" id="loopCount" placeholder="Repetições" value="5" min="1" max="10" />
                        <button class="try-button" onclick="simulateLoop()">▶️ Executar Loop</button>
                    </div>
                    <div id="loopResult" style="margin-top: 15px; font-family: monospace;"></div>
                </div>

                <div class="exercise-box">
                    <div class="exercise-title">
                        🎯 Desafio: Array e Loop
                    </div>
                    <p>Crie um array com nomes e use um loop para mostrá-los:</p>
                    <textarea class="input-area" id="exercise3" placeholder="<?php
                                                                                $nomes = array('Ana', 'Bruno', 'Carlos');
                                                                                foreach ($nomes as $nome) {
                                                                                    echo $nome . '<br>';
                                                                                }
                                                                                ?>"></textarea>
                    <button class="try-button" onclick="runExercise(3)">▶️ Testar Código</button>
                    <div class="result-box" id="result3"></div>
                </div>

                <div class="quiz-question">
                    <h4>❓ Quiz: Qual a diferença entre == e === em PHP?</h4>
                    <div class="quiz-options">
                        <label class="quiz-option" onclick="checkAnswer(this, false)">
                            <input type="radio" name="q2" /> Não há diferença
                        </label>
                        <label class="quiz-option" onclick="checkAnswer(this, true)">
                            <input type="radio" name="q2" /> == compara valor, === compara valor e tipo
                        </label>
                        <label class="quiz-option" onclick="checkAnswer(this, false)">
                            <input type="radio" name="q2" /> === é mais rápido que ==
                        </label>
                    </div>
                </div>
            </div>

            <!-- TAB AVANÇADO -->
            <div id="avancado" class="lesson-content">
                <h2>
                    <div class="icon">🔧</div>
                    Módulo 3: Conceitos Avançados
                </h2>

                <div class="exercise-box">
                    <div class="exercise-title">
                        🎯 Exercício: Função Personalizada
                    </div>
                    <p>Crie uma função que calcula a área de um retângulo:</p>
                    <textarea class="input-area" id="exercise4" placeholder="<?php
                                                                                function calcularArea($largura, $altura)
                                                                                {
                                                                                    return $largura * $altura;
                                                                                }

                                                                                echo 'Área: ' . calcularArea(5, 10);
                                                                                ?>"></textarea>
                    <button class="try-button" onclick="runExercise(4)">▶️ Testar Código</button>
                    <div class="result-box" id="result4"></div>
                </div>

                <div class="simulator">
                    <h3>📝 Simulador de Formulário</h3>
                    <p>Simule o processamento de um formulário PHP:</p>
                    <div class="simulator-controls">
                        <input type="text" class="simulator-input" id="formName" placeholder="Seu nome" />
                        <input type="email" class="simulator-input" id="formEmail" placeholder="Seu email" />
                        <select class="simulator-input" id="formAge">
                            <option value="">Idade</option>
                            <option value="18-25">18-25 anos</option>
                            <option value="26-35">26-35 anos</option>
                            <option value="36+">36+ anos</option>
                        </select>
                        <button class="try-button" onclick="processForm()">📤 Processar Formulário</button>
                    </div>
                    <div id="formResult" style="margin-top: 15px; font-family: monospace;"></div>
                </div>

                <div class="exercise-box">
                    <div class="exercise-title">
                        🎯 Desafio: Sistema de Login Simples
                    </div>
                    <p>Crie um sistema básico de verificação de login:</p>
                    <textarea class="input-area" id="exercise5" placeholder="<?php
                                                                                $usuario_correto = 'admin';
                                                                                $senha_correta = '123456';

                                                                                $usuario = $_POST['usuario'] ?? '';
                                                                                $senha = $_POST['senha'] ?? '';

                                                                                if ($usuario === $usuario_correto && $senha === $senha_correta) {
                                                                                    echo 'Login realizado com sucesso!';
                                                                                } else {
                                                                                    echo 'Usuário ou senha incorretos!';
                                                                                }
                                                                                ?>"></textarea>
                    <button class="try-button" onclick="runExercise(5)">▶️ Testar Código</button>
                    <div class="result-box" id="result5"></div>
                </div>

                <div class="simulator">
                    <h3>🗃️ Simulador de Banco de Dados</h3>
                    <p>Simule operações básicas com "banco de dados":</p>
                    <div class="simulator-controls">
                        <input type="text" class="simulator-input" id="dbName" placeholder="Nome do usuário" />
                        <input type="text" class="simulator-input" id="dbEmail" placeholder="Email do usuário" />
                        <button class="try-button" onclick="addToDatabase()">➕ Adicionar</button>
                        <button class="try-button" onclick="showDatabase()">👁️ Ver Dados</button>
                        <button class="try-button" onclick="clearDatabase()">🗑️ Limpar</button>
                    </div>
                    <div id="databaseResult" style="margin-top: 15px; font-family: monospace;"></div>
                </div>

                <div class="quiz-question">
                    <h4>❓ Quiz: O que são superglobais em PHP?</h4>
                    <div class="quiz-options">
                        <label class="quiz-option" onclick="checkAnswer(this, false)">
                            <input type="radio" name="q3" /> Variáveis muito grandes
                        </label>
                        <label class="quiz-option" onclick="checkAnswer(this, true)">
                            <input type="radio" name="q3" /> Variáveis acessíveis em qualquer escopo
                        </label>
                        <label class="quiz-option" onclick="checkAnswer(this, false)">
                            <input type="radio" name="q3" /> Variáveis protegidas do sistema
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>Desenvolvido para facilitar o aprendizado de PHP | © 2025</p>
        </div>
    </div>
    <script src="./assets/js/script.js"></script>
</body>
</html>