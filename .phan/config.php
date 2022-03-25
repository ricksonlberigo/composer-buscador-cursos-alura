<?php

return [
  "target_php_version" =>  '8.0.9', // Versão do php
  'directory_list' => [
    'src',
    'vendor/symfony/console',

    // dependências que coloquei manualmente para não gerar mais erros
    'vendor/guzzlehttp/guzzle',
    'vendor/symfony/dom-crawler',
    'vendor/psr/http-client',
    'vendor/psr/http-message',
  ],
  "exclude_analysis_directory_list" => [
    'vendor/'
  ],
  'plugins' => [
    'AlwaysReturnPlugin',
    'DollarDollarPlugin',
    'DuplicateArrayKeyPlugin',
    'DuplicateExpressionPlugin',
    'PregRegexCheckerPlugin',
    'PrintfCheckerPlugin',
    'SleepCheckerPlugin',
    'UnreachableCodePlugin',
    'UseReturnValuePlugin',
    'EmptyStatementListPlugin',
    'LoopVariableReusePlugin',
  ],
];
