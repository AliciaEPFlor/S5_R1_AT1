<?php

// Porte da empresa baseado no número de funcionários
$numeroFuncionarios = 75;

// Tempo de mercado em anos
$tempoMercado = 8;

// Setor de atuação da empresa
$setor = "TI";

// Status da empresa (Ativa, Inativa, Em recuperação)
$status = "Ativa";

echo "<h2>📊 ANÁLISE DA EMPRESA</h2>";
echo "<h3>1. Porte da Empresa</h3>";

// Classifica o porte conforme o número de funcionários
if ($numeroFuncionarios < 50) {
    // Menos de 50 funcionários = Pequeno porte
    echo "✅ Empresa de PEQUENO porte (menos de 50 funcionários)<br>";
} elseif ($numeroFuncionarios >= 50 && $numeroFuncionarios <= 200) {
    // Entre 50 e 200 funcionários = Médio porte
    echo "✅ Empresa de MÉDIO porte (entre 50 e 200 funcionários)<br>";
} else {
    // Mais de 200 funcionários = Grande porte
    echo "✅ Empresa de GRANDE porte (mais de 200 funcionários)<br>";
}

echo "<br>";
echo "<h3>2. Tempo de Mercado</h3>";

// Verifica se a empresa é nova ou consolidada
if ($tempoMercado < 3) {
    // Menos de 3 anos = Empresa nova
    echo "📌 Empresa NOVA no mercado (menos de 3 anos)<br>";
    echo "💡 Sugestão: Foco em construção de marca e relacionamento<br>";
} else {
    // 3 anos ou mais = Empresa consolidada
    echo "📌 Empresa CONSOLIDADA no mercado (3 anos ou mais)<br>";
    echo "💡 Sugestão: Foco em expansão e inovação<br>";
}

echo "<br>";
echo "<h3>3. Setor de Atuação</h3>";

// Exibe informações específicas conforme o setor
switch ($setor) {
    case "TI":
        echo "💻 Setor de TECNOLOGIA da Informação<br>";
        echo "🔹 Áreas: Desenvolvimento, Infraestrutura, Dados<br>";
        break;
    
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
        echo "❓ Setor NÃO IDENTIFICADO<br>";
        echo "🔹 Verifique as opções disponíveis: TI, RH, Financeiro, Saúde, Educação<br>";

}
echo "<br>";
echo "<h3>4. Status da Empresa</h3>";

// Analisa o status atual e exibe mensagem apropriada
if ($status == "Ativa") {
    echo "🟢 Empresa ATIVA - Operações normais<br>";
    echo "✅ Todas as funcionalidades disponíveis<br>";
    
    // Decisão adicional baseada no porte para empresas ativas
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
    // Caso o status não seja reconhecido
    echo "❓ Status não reconhecido: $status<br>";
    echo "🔹 Status válidos: Ativa, Inativa, Em recuperação<br>";
}

// Analisa o status atual e exibe mensagem apropriada
if ($status == "Ativa") {
    echo "🟢 Empresa ATIVA - Operações normais<br>";
    echo "✅ Todas as funcionalidades disponíveis<br>";
    
    // Decisão adicional baseada no porte para empresas ativas
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
    // Caso o status não seja reconhecido
    echo "❓ Status não reconhecido: $status<br>";
    echo "🔹 Status válidos: Ativa, Inativa, Em recuperação<br>";
}

echo "<br>";
echo "<h3>5. Controle de Acesso</h3>";

// Regra de negócio: só permite acesso se empresa ativa E tempo > 1 ano
if ($status == "Ativa") {
    if ($tempoMercado > 1) {
        echo "✅ ACESSO PERMITIDO - Empresa ativa e com mais de 1 ano de mercado<br>";
        echo "🔑 Bem-vindo ao sistema da empresa $setor<br>";
    } else {
        echo "⛔ ACESSO NEGADO - Empresa ativa mas com menos de 1 ano de mercado<br>";
        echo "📋 Entre em contato com o suporte para liberação<br>";
    }
} else {
    echo "⛔ ACESSO NEGADO - Empresa não está ativa ($status)<br>";
    echo "📋 Contate a administração para regularizar a situação<br>";
}

echo "<br>";

echo "<h3>📋 Resumo dos Dados</h3>";
echo "• Número de funcionários: $numeroFuncionarios<br>";
echo "• Tempo de mercado: $tempoMercado anos<br>";
echo "• Setor: $setor<br>";
echo "• Status: $status<br>";


echo "<h3>🎯 Diagnóstico Final</h3>";

// Combina múltiplas condições para um diagnóstico completo
if ($status == "Ativa" && $tempoMercado > 5 && $numeroFuncionarios > 100) {
    echo "🏆 EMPRESA EXEMPLAR - Ativa, consolidada e com grande equipe<br>";
    echo "🌟 Recomendação: Candidate-se a prêmios de melhores empresas<br>";
} elseif ($status == "Ativa" && $tempoMercado > 3) {
    echo "📈 EMPRESA EM CRESCIMENTO - Ativa e consolidada<br>";
    echo "🚀 Recomendação: Invista em marketing e expansão<br>";
} elseif ($status == "Ativa" && $tempoMercado <= 3) {
    echo "🌱 EMPRESA EM DESENVOLVIMENTO - Ativa, mas recente<br>";
    echo "💪 Recomendação: Foco em estruturação e qualidade<br>";
}

?>