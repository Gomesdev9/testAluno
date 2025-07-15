// Animação da barra de progresso
        document.addEventListener('DOMContentLoaded', function() {
            const progressBar = document.querySelector('.progress-fill');
            setTimeout(() => {
                progressBar.style.width = '16.67%'; // 1/6 das lições
            }, 500);
        });

        // Criar elementos flutuantes
        function createFloatingElements() {
            const container = document.querySelector('.floating-elements');
            for (let i = 0; i < 20; i++) {
                const element = document.createElement('div');
                element.className = 'floating-element';
                element.style.left = Math.random() * 100 + '%';
                element.style.top = Math.random() * 100 + '%';
                element.style.animationDelay = Math.random() * 6 + 's';
                element.style.animationDuration = (Math.random() * 4 + 4) + 's';
                container.appendChild(element);
            }
        }

        // Função para mostrar detalhes da timeline
        function showDetails(year) {
            const details = {
                1994: "Rasmus Lerdorf criou PHP para rastrear visitas em seu site pessoal. Inicialmente era apenas um conjunto de scripts CGI.",
                1995: "A primeira versão pública foi lançada, ainda chamada de 'Personal Home Page'.",
                1997: "Andi Gutmans e Zeev Suraski reescreveram completamente o código, criando o PHP 3.",
                2000: "PHP 4 introduziu o Zend Engine, melhorando significativamente a performance.",
                2004: "PHP 5 trouxe melhorias na orientação a objetos e novos recursos avançados.",
                2015: "PHP 7 foi um marco com melhorias de performance de até 2x em relação ao PHP 5.",
                2020: "PHP 8 introduziu JIT compilation, union types e outras funcionalidades modernas."
            };

            alert(`${year}: ${details[year]}`);
        }

        // Função para o quiz
        function selectAnswer(element, isCorrect) {
            // Remove classes anteriores
            document.querySelectorAll('.quiz-options li').forEach(li => {
                li.classList.remove('correct', 'incorrect');
            });

            // Adiciona a classe apropriada
            if (isCorrect) {
                element.classList.add('correct');
                setTimeout(() => {
                    alert('Parabéns! Resposta correta! 🎉');
                }, 100);
            } else {
                element.classList.add('incorrect');
                setTimeout(() => {
                    alert('Ops! Tente novamente. A resposta correta é "PHP: Hypertext Preprocessor"');
                }, 100);
            }
        }

        // Animação do contador
        function animateCounter() {
            const counter = document.getElementById('sites-counter');
            let current = 0;
            const target = 40;
            const increment = target / 100;

            const timer = setInterval(() => {
                current += increment;
                counter.textContent = Math.ceil(current) + '%';

                if (current >= target) {
                    clearInterval(timer);
                    counter.textContent = target + '%';
                }
            }, 20);
        }

        // Inicializar elementos
        createFloatingElements();

        // Animar contador quando visível
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && entry.target.id === 'sites-counter') {
                    animateCounter();
                    observer.unobserve(entry.target);
                }
            });
        });

        observer.observe(document.getElementById('sites-counter'));

        console.log('Lição 1 carregada com sucesso! 🚀');