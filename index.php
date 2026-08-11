<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
// Porte da empresa baseado no número de funcionários
$numeroFuncionarios = 75;
// Define uma variável inteira com valor 75 (número de funcionários)
// Em PHP, variáveis começam com $ e são case-sensitive

// Tempo de mercado em anos
$tempoMercado = 8;
// Define uma variável inteira com valor 8 (anos de mercado)

// Setor de atuação da empresa
$setor = "TI";
// Define uma variável string com valor "TI" (setor de tecnologia)

// Status da empresa (Ativa, Inativa, Em recuperação)
$status = "Ativa";
// Define uma variável string com valor "Ativa" (status da empresa)

// ===== INÍCIO DA SAÍDA HTML =====
echo "<h2>📊 ANÁLISE DA EMPRESA</h2>";
// echo exibe conteúdo HTML no navegador
// <h2> é um cabeçalho de nível 2 (título)
// O emoji 📊 é um gráfico (visualmente atrativo)

echo "<h3>1. Porte da Empresa</h3>";
// <h3> é um cabeçalho de nível 3 (subtítulo)

// ===== CLASSIFICAÇÃO DO PORTE =====
if ($numeroFuncionarios < 50) {
    // Estrutura condicional IF - verifica se o número é menor que 50
    // Se verdadeiro, executa o código dentro das chaves {}
    
    // Menos de 50 funcionários = Pequeno porte
    echo "✅ Empresa de PEQUENO porte (menos de 50 funcionários)<br>";
    // <br> é quebra de linha em HTML
    
} elseif ($numeroFuncionarios >= 50 && $numeroFuncionarios <= 200) {
    // ELSEIF - segunda condição (se a primeira for falsa)
    // && é "E" lógico (AND) - ambas condições devem ser verdadeiras
    // Verifica se está entre 50 e 200 (inclusive)
    
    // Entre 50 e 200 funcionários = Médio porte
    echo "✅ Empresa de MÉDIO porte (entre 50 e 200 funcionários)<br>";
    
} else {
    // ELSE - executado se todas as condições anteriores forem falsas
    // Mais de 200 funcionários = Grande porte
    echo "✅ Empresa de GRANDE porte (mais de 200 funcionários)<br>";
}

echo "<br>";
// Quebra de linha simples para espaçamento

// ===== TEMPO DE MERCADO =====
echo "<h3>2. Tempo de Mercado</h3>";

if ($tempoMercado < 3) {
    // Verifica se o tempo é menor que 3 anos
    echo "📌 Empresa NOVA no mercado (menos de 3 anos)<br>";
    echo "💡 Sugestão: Foco em construção de marca e relacionamento<br>";
    // Emojis para tornar a saída mais visual e amigável
} else {
    // Executa se o tempo for 3 anos ou mais
    echo "📌 Empresa CONSOLIDADA no mercado (3 anos ou mais)<br>";
    echo "💡 Sugestão: Foco em expansão e inovação<br>";
}

// ===== SETOR DE ATUAÇÃO =====
echo "<h3>3. Setor de Atuação</h3>";

switch ($setor) {
    // Switch - estrutura de seleção múltipla
    // Compara o valor da variável $setor com os casos
    
    case "TI":
        // Se $setor for igual a "TI"
        echo "💻 Setor de TECNOLOGIA da Informação<br>";
        echo "🔹 Áreas: Desenvolvimento, Infraestrutura, Dados<br>";
        break; // break - interrompe a execução do switch
    
    case "RH":
        echo "👥 Setor de RECURSOS Humanos<br>";
        echo "🔹 Áreas: Recrutamento, Treinamento, Benefícios<br>";
        break;
    
    case "Financeiro":
        echo "💰 Setor FINANCEIRO<br>";
        echo "🔹 Áreas: Contabilidade, Investimentos, Auditoria<br>";
        break;
    
    case "Saúde":
        echo "🏥 Setor de SAÚDE<br>";
        echo "🔹 Áreas: Clínicas, Hospitais, Pesquisa<br>";
        break;
    
    case "Educação":
        echo "📚 Setor de EDUCAÇÃO<br>";
        echo "🔹 Áreas: Escolas, Cursos, Treinamentos<br>";
        break;
    
    default:
        // default - executado quando nenhum case corresponde
        echo "❓ Setor NÃO IDENTIFICADO<br>";
        echo "🔹 Verifique as opções disponíveis: TI, RH, Financeiro, Saúde, Educação<br>";
}

// ===== STATUS DA EMPRESA =====
echo "<h3>4. Status da Empresa</h3>";

// Primeira análise de status (bloco duplicado - será comentado depois)
if ($status == "Ativa") {
    // == comparação de igualdade (não estrita)
    // Verifica se o status é "Ativa"
    
    echo "🟢 Empresa ATIVA - Operações normais<br>";
    echo "✅ Todas as funcionalidades disponíveis<br>";
    
    // Decisão adicional baseada no porte para empresas ativas
    if ($numeroFuncionarios > 100) {
        // Condição aninhada (dentro de outra condição)
        echo "📈 Empresa em fase de crescimento<br>";
    }
    
} elseif ($status == "Inativa") {
    echo "🔴 Empresa INATIVA - Operações suspensas<br>";
    echo "⛔ Acesso restrito ao sistema<br>";
    
} elseif ($status == "Em recuperação") {
    echo "🟡 Empresa em RECUPERAÇÃO<br>";
    echo "⚠️ Funcionalidades limitadas temporariamente<br>";
    
} else {
    echo "❓ Status não reconhecido: $status<br>";
    echo "🔹 Status válidos: Ativa, Inativa, Em recuperação<br>";
}

// BLOCO DUPLICADO - O mesmo código é repetido
// Isso é um erro de programação (redundância)
// O mesmo bloco IF do status é executado novamente
if ($status == "Ativa") {
    echo "🟢 Empresa ATIVA - Operações normais<br>";
    echo "✅ Todas as funcionalidades disponíveis<br>";
    
    if ($numeroFuncionarios > 100) {
        echo "📈 Empresa em fase de crescimento<br>";
    }
    
} elseif ($status == "Inativa") {
    echo "🔴 Empresa INATIVA - Operações suspensas<br>";
    echo "⛔ Acesso restrito ao sistema<br>";
    
} elseif ($status == "Em recuperação") {
    echo "🟡 Empresa em RECUPERAÇÃO<br>";
    echo "⚠️ Funcionalidades limitadas temporariamente<br>";
    
} else {
    echo "❓ Status não reconhecido: $status<br>";
    echo "🔹 Status válidos: Ativa, Inativa, Em recuperação<br>";
}

// ===== CONTROLE DE ACESSO =====
echo "<h3>5. Controle de Acesso</h3>";

// Regra de negócio: só permite acesso se empresa ativa E tempo > 1 ano
if ($status == "Ativa") {
    // Primeiro verifica se a empresa está ativa
    
    if ($tempoMercado > 1) {
        // Verifica se o tempo de mercado é maior que 1 ano
        echo "✅ ACESSO PERMITIDO - Empresa ativa e com mais de 1 ano de mercado<br>";
        echo "🔑 Bem-vindo ao sistema da empresa $setor<br>";
    } else {
        echo "⛔ ACESSO NEGADO - Empresa ativa mas com menos de 1 ano de mercado<br>";
        echo "📋 Entre em contato com o suporte para liberação<br>";
    }
} else {
    // Executa se a empresa não estiver ativa
    echo "⛔ ACESSO NEGADO - Empresa não está ativa ($status)<br>";
    echo "📋 Contate a administração para regularizar a situação<br>";
}

echo "<br>";

// ===== RESUMO DOS DADOS =====
echo "<h3>📋 Resumo dos Dados</h3>";
echo "• Número de funcionários: $numeroFuncionarios<br>";
// O PHP substitui $numeroFuncionarios pelo valor 75
echo "• Tempo de mercado: $tempoMercado anos<br>";
echo "• Setor: $setor<br>";
echo "• Status: $status<br>";

// ===== DIAGNÓSTICO FINAL =====
echo "<h3>🎯 Diagnóstico Final</h3>";

// Combina múltiplas condições para um diagnóstico completo
if ($status == "Ativa" && $tempoMercado > 5 && $numeroFuncionarios > 100) {
    // && (AND) - todas as três condições devem ser verdadeiras
    echo "🏆 EMPRESA EXEMPLAR - Ativa, consolidada e com grande equipe<br>";
    echo "🌟 Recomendação: Candidate-se a prêmios de melhores empresas<br>";
    
} elseif ($status == "Ativa" && $tempoMercado > 3) {
    // Segunda condição: ativa e mais de 3 anos de mercado
    echo "📈 EMPRESA EM CRESCIMENTO - Ativa e consolidada<br>";
    echo "🚀 Recomendação: Invista em marketing e expansão<br>";
    
} elseif ($status == "Ativa" && $tempoMercado <= 3) {
    // <= significa "menor ou igual a"
    echo "🌱 EMPRESA EM DESENVOLVIMENTO - Ativa, mas recente<br>";
    echo "💪 Recomendação: Foco em estruturação e qualidade<br>";
}

?> 
// Fecha o bloco PHP