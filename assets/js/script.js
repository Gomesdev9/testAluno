// Variáveis globais
let currentLesson = 0;
let progress = 0;
let database = [];

// Inicialização quando a página carrega
document.addEventListener('DOMContentLoaded', function() {
    updateProgress();
    showTab('overview');
});

// Função para selecionar lição - agora redireciona para páginas específicas
function selectLesson(lessonNumber) {
    // Define as URLs das lições
    const lessonUrls = {
        1: './pages/licao1-o-que-e-php.php',
        2: './pages/licao2-configurando-ambiente.php',
        3: './pages/licao3-primeiro-codigo.php',
        4: './pages/licao4-variaveis-tipos.php',
        5: './pages/licao5-operadores.php',
        6: './pages/licao6-estruturas-condicionais.php',
        7: './pages/licao7-loops.php',
        8: './pages/licao8-arrays.php',
        9: './pages/licao9-funcoes.php',
        10: './pages/licao10-formularios.php',
        11: './pages/licao11-banco-dados.php',
        12: './pages/licao12-sessoes-cookies.php'
    };
    
    // Salva o progresso atual no localStorage (simulado)
    currentLesson = lessonNumber;
    progress = Math.round((lessonNumber / 12) * 100);
    
    // Redireciona para a página da lição
    if (lessonUrls[lessonNumber]) {
        window.location.href = lessonUrls[lessonNumber];
    } else {
        alert('Lição ainda não disponível!');
    }
}

// Função para mostrar abas
function showTab(tabName) {
    // Remove classe active de todos os botões e conteúdos
    document.querySelectorAll('.tab-button').forEach(btn => {
        btn.classList.remove('active');
    });
    document.querySelectorAll('.lesson-content').forEach(content => {
        content.classList.remove('active');
    });
    
    // Adiciona classe active ao botão e conteúdo selecionado
    event.target.classList.add('active');
    document.getElementById(tabName).classList.add('active');
}

// Função para atualizar barra de progresso
function updateProgress() {
    const progressBar = document.getElementById('progressBar');
    const progressText = document.getElementById('progressText');
    
    if (progressBar) {
        progressBar.style.width = progress + '%';
    }
    if (progressText) {
        progressText.textContent = `Progresso: ${progress}% completo`;
    }
}

// Função para executar exemplo inicial
function runExample() {
    const output = `
Resultado da execução:
Olá, mundo!
Bem-vindos ao curso de PHP!
Meu nome é João e tenho 25 anos.

✅ Código executado com sucesso!
    `;
    
    alert(output);
    
    // Incrementa progresso se for a primeira vez
    if (progress < 10) {
        progress = 10;
        updateProgress();
    }
}

// Função para próxima lição
function nextLesson() {
    if (currentLesson < 12) {
        selectLesson(currentLesson + 1);
    } else {
        alert('🎉 Parabéns! Você completou todas as lições!');
    }
}

// Função para executar exercícios
function runExercise(exerciseNumber) {
    const textarea = document.getElementById(`exercise${exerciseNumber}`);
    const resultDiv = document.getElementById(`result${exerciseNumber}`);
    
    if (!textarea || !resultDiv) return;
    
    const code = textarea.value.trim();
    
    if (!code) {
        resultDiv.innerHTML = '<div style="color: #f56565;">❌ Digite algum código primeiro!</div>';
        return;
    }
    
    // Simula execução baseado no exercício
    let result = '';
    
    switch(exerciseNumber) {
        case 1:
            if (code.includes('echo')) {
                result = '<div style="color: #4ade80;">✅ Ótimo! Seu código PHP funcionou!</div>';
                result += '<div style="margin-top: 10px; padding: 10px; background: #1a202c; color: #4ade80; border-radius: 6px;">Saída: ' + extractEchoContent(code) + '</div>';
            } else {
                result = '<div style="color: #f56565;">❌ Seu código deve usar o comando "echo"</div>';
            }
            break;
            
        case 2:
            if (code.includes('if') && code.includes('else')) {
                result = '<div style="color: #4ade80;">✅ Perfeito! Estrutura condicional criada!</div>';
                result += '<div style="margin-top: 10px; padding: 10px; background: #1a202c; color: #4ade80; border-radius: 6px;">Saída: Número maior que 10</div>';
            } else {
                result = '<div style="color: #f56565;">❌ Use estruturas if/else em seu código</div>';
            }
            break;
            
        case 3:
            if (code.includes('array') && code.includes('foreach')) {
                result = '<div style="color: #4ade80;">✅ Excelente! Array e loop funcionando!</div>';
                result += '<div style="margin-top: 10px; padding: 10px; background: #1a202c; color: #4ade80; border-radius: 6px;">Saída:<br>Ana<br>Bruno<br>Carlos</div>';
            } else {
                result = '<div style="color: #f56565;">❌ Use array() e foreach em seu código</div>';
            }
            break;
            
        case 4:
            if (code.includes('function') && code.includes('return')) {
                result = '<div style="color: #4ade80;">✅ Função criada com sucesso!</div>';
                result += '<div style="margin-top: 10px; padding: 10px; background: #1a202c; color: #4ade80; border-radius: 6px;">Saída: Área: 50</div>';
            } else {
                result = '<div style="color: #f56565;">❌ Crie uma função que retorna um valor</div>';
            }
            break;
            
        case 5:
            if (code.includes('$_POST') && code.includes('===')) {
                result = '<div style="color: #4ade80;">✅ Sistema de login implementado!</div>';
                result += '<div style="margin-top: 10px; padding: 10px; background: #1a202c; color: #4ade80; border-radius: 6px;">Saída: Login realizado com sucesso!</div>';
            } else {
                result = '<div style="color: #f56565;">❌ Use $_POST e comparação === em seu código</div>';
            }
            break;
    }
    
    resultDiv.innerHTML = result;
    
    // Atualiza progresso
    progress = Math.min(progress + 5, 100);
    updateProgress();
}

// Função auxiliar para extrair conteúdo do echo
function extractEchoContent(code) {
    const matches = code.match(/echo\s+['"](.*?)['"]/g);
    if (matches) {
        return matches.map(match => match.replace(/echo\s+['"]|['"];?/g, '')).join('<br>');
    }
    return 'Resultado do seu código';
}

// Função para criar variável no simulador
function createVariable() {
    const varName = document.getElementById('varName').value;
    const varType = document.getElementById('varType').value;
    const varValue = document.getElementById('varValue').value;
    const resultDiv = document.getElementById('variableResult');
    
    if (!varName || !varValue) {
        resultDiv.innerHTML = '<div style="color: #f56565;">❌ Preencha nome e valor da variável!</div>';
        return;
    }
    
    let phpCode = '';
    let processedValue = varValue;
    
    switch(varType) {
        case 'string':
            phpCode = `$${varName} = "${varValue}";`;
            break;
        case 'int':
            processedValue = parseInt(varValue) || 0;
            phpCode = `$${varName} = ${processedValue};`;
            break;
        case 'float':
            processedValue = parseFloat(varValue) || 0.0;
            phpCode = `$${varName} = ${processedValue};`;
            break;
        case 'bool':
            processedValue = varValue.toLowerCase() === 'true' ? 'true' : 'false';
            phpCode = `$${varName} = ${processedValue};`;
            break;
    }
    
    resultDiv.innerHTML = `
        <div style="color: #4ade80;">✅ Variável criada com sucesso!</div>
        <div style="margin-top: 10px; padding: 10px; background: #2d3748; border-radius: 6px;">
            <div style="color: #81c784;">&lt;?php</div>
            <div style="color: #ffb74d;">${phpCode}</div>
            <div style="color: #ffb74d;">echo $${varName};</div>
            <div style="color: #81c784;">?&gt;</div>
        </div>
        <div style="margin-top: 10px; padding: 10px; background: #1a202c; color: #4ade80; border-radius: 6px;">
            Saída: ${processedValue}
        </div>
    `;
}

// Função para simular loops
function simulateLoop() {
    const loopType = document.getElementById('loopType').value;
    const loopCount = parseInt(document.getElementById('loopCount').value) || 5;
    const resultDiv = document.getElementById('loopResult');
    
    let phpCode = '';
    let output = '';
    
    switch(loopType) {
        case 'for':
            phpCode = `for ($i = 1; $i <= ${loopCount}; $i++) {
    echo "Número: " . $i . "<br>";
}`;
            for (let i = 1; i <= loopCount; i++) {
                output += `Número: ${i}<br>`;
            }
            break;
            
        case 'while':
            phpCode = `$i = 1;
while ($i <= ${loopCount}) {
    echo "Contagem: " . $i . "<br>";
    $i++;
}`;
            for (let i = 1; i <= loopCount; i++) {
                output += `Contagem: ${i}<br>`;
            }
            break;
            
        case 'foreach':
            phpCode = `$numeros = array(1, 2, 3, 4, ${loopCount});
foreach ($numeros as $numero) {
    echo "Item: " . $numero . "<br>";
}`;
            for (let i = 1; i <= Math.min(loopCount, 5); i++) {
                output += `Item: ${i}<br>`;
            }
            break;
    }
    
    resultDiv.innerHTML = `
        <div style="color: #4ade80;">✅ Loop ${loopType.toUpperCase()} executado!</div>
        <div style="margin-top: 10px; padding: 10px; background: #2d3748; border-radius: 6px;">
            <div style="color: #81c784;">&lt;?php</div>
            <div style="color: #ffb74d;">${phpCode.replace(/\n/g, '<br>')}</div>
            <div style="color: #81c784;">?&gt;</div>
        </div>
        <div style="margin-top: 10px; padding: 10px; background: #1a202c; color: #4ade80; border-radius: 6px;">
            ${output}
        </div>
    `;
}

// Função para processar formulário
function processForm() {
    const name = document.getElementById('formName').value;
    const email = document.getElementById('formEmail').value;
    const age = document.getElementById('formAge').value;
    const resultDiv = document.getElementById('formResult');
    
    if (!name || !email || !age) {
        resultDiv.innerHTML = '<div style="color: #f56565;">❌ Preencha todos os campos!</div>';
        return;
    }
    
    const phpCode = `$_POST['nome'] = "${name}";
$_POST['email'] = "${email}";
$_POST['idade'] = "${age}";

if (!empty($_POST['nome']) && !empty($_POST['email'])) {
    echo "Dados recebidos com sucesso!<br>";
    echo "Nome: " . $_POST['nome'] . "<br>";
    echo "Email: " . $_POST['email'] . "<br>";
    echo "Idade: " . $_POST['idade'];
}`;
    
    resultDiv.innerHTML = `
        <div style="color: #4ade80;">✅ Formulário processado!</div>
        <div style="margin-top: 10px; padding: 10px; background: #2d3748; border-radius: 6px;">
            <div style="color: #81c784;">&lt;?php</div>
            <div style="color: #ffb74d;">${phpCode.replace(/\n/g, '<br>')}</div>
            <div style="color: #81c784;">?&gt;</div>
        </div>
        <div style="margin-top: 10px; padding: 10px; background: #1a202c; color: #4ade80; border-radius: 6px;">
            Dados recebidos com sucesso!<br>
            Nome: ${name}<br>
            Email: ${email}<br>
            Idade: ${age}
        </div>
    `;
}

// Funções do simulador de banco de dados
function addToDatabase() {
    const name = document.getElementById('dbName').value;
    const email = document.getElementById('dbEmail').value;
    
    if (!name || !email) {
        document.getElementById('databaseResult').innerHTML = 
            '<div style="color: #f56565;">❌ Preencha nome e email!</div>';
        return;
    }
    
    database.push({ id: database.length + 1, name, email });
    
    document.getElementById('databaseResult').innerHTML = `
        <div style="color: #4ade80;">✅ Usuário adicionado à base de dados!</div>
        <div style="margin-top: 10px; padding: 10px; background: #2d3748; border-radius: 6px;">
            <div style="color: #81c784;">INSERT INTO usuarios (nome, email) VALUES ("${name}", "${email}");</div>
        </div>
    `;
    
    // Limpa os campos
    document.getElementById('dbName').value = '';
    document.getElementById('dbEmail').value = '';
}

function showDatabase() {
    const resultDiv = document.getElementById('databaseResult');
    
    if (database.length === 0) {
        resultDiv.innerHTML = '<div style="color: #f56565;">❌ Base de dados vazia!</div>';
        return;
    }
    
    let tableHTML = `
        <div style="color: #4ade80;">📋 Dados na base de dados:</div>
        <div style="margin-top: 10px; padding: 10px; background: #2d3748; border-radius: 6px;">
            <div style="color: #81c784;">SELECT * FROM usuarios;</div>
        </div>
        <table style="width: 100%; margin-top: 10px; border-collapse: collapse;">
            <tr style="background: #2d3748; color: white;">
                <th style="padding: 8px; border: 1px solid #4a5568;">ID</th>
                <th style="padding: 8px; border: 1px solid #4a5568;">Nome</th>
                <th style="padding: 8px; border: 1px solid #4a5568;">Email</th>
            </tr>
    `;
    
    database.forEach(user => {
        tableHTML += `
            <tr style="background: #1a202c; color: #e2e8f0;">
                <td style="padding: 8px; border: 1px solid #4a5568;">${user.id}</td>
                <td style="padding: 8px; border: 1px solid #4a5568;">${user.name}</td>
                <td style="padding: 8px; border: 1px solid #4a5568;">${user.email}</td>
            </tr>
        `;
    });
    
    tableHTML += '</table>';
    resultDiv.innerHTML = tableHTML;
}

function clearDatabase() {
    database = [];
    document.getElementById('databaseResult').innerHTML = `
        <div style="color: #4ade80;">✅ Base de dados limpa!</div>
        <div style="margin-top: 10px; padding: 10px; background: #2d3748; border-radius: 6px;">
            <div style="color: #81c784;">DELETE FROM usuarios;</div>
        </div>
    `;
}

// Função para verificar respostas do quiz
function checkAnswer(element, isCorrect) {
    // Remove classes anteriores
    const options = element.parentNode.querySelectorAll('.quiz-option');
    options.forEach(option => {
        option.classList.remove('correct', 'incorrect');
    });
    
    // Adiciona classe baseada na resposta
    if (isCorrect) {
        element.classList.add('correct');
        setTimeout(() => {
            alert('🎉 Resposta correta! Muito bem!');
            progress = Math.min(progress + 3, 100);
            updateProgress();
        }, 300);
    } else {
        element.classList.add('incorrect');
        setTimeout(() => {
            alert('❌ Resposta incorreta. Tente novamente!');
        }, 300);
    }
}

// Função para adicionar efeitos visuais aos botões
document.addEventListener('DOMContentLoaded', function() {
    // Adiciona efeito de hover aos cartões
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});

// Função para scroll suave nos links internos
function smoothScroll(target) {
    document.querySelector(target).scrollIntoView({
        behavior: 'smooth'
    });
}
