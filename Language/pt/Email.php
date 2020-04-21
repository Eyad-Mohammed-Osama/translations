<?php

/**
 * Email language strings.
 *
 * @package      CodeIgniter
 * @author       CodeIgniter Dev Team
 * @copyright    2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */
return [
	'mustBeArray'          => 'O método de validação de email deve ser passado em array.',
	'invalidAddress'       => 'Endereço de E-mail inválido: {0}',
	'attachmentMissing'    => 'Não é possível encontrar o seguinte anexo de email: {0}',
	'attachmentUnreadable' => 'Não é possível abrir este anexo: {0}',
	'noFrom'               => 'Não é possível enviar email sem o cabeçalho "De".',
	'noRecipients'         => 'Deve incluir destinatários: Para, Cc ou Cco',
	'sendFailurePHPMail'   => 'Não é possível enviar e-mail usando o PHP mail(). O servidor pode não estar configurado para enviar e-mails usando esse método.',
	'sendFailureSendmail'  => 'Não é possível enviar e-mail usando o PHP Sendmail. O servidor pode não estar configurado para enviar e-mails usando esse método.',
	'sendFailureSmtp'      => 'Não é possível enviar e-mail usando o PHP SMTP. O servidor pode não estar configurado para enviar e-mails usando esse método.',
	'sent'                 => 'A sua mensagem foi enviada com sucesso usando o seguinte protocolo: {0, string}',
	'noSocket'             => 'Não foi possível abrir um socket para o Sendmail. Por favor, verifique as configurações.',
	'noHostname'           => 'Não especificou um nome de host SMTP.',
	'SMTPError'            => 'O seguinte erro SMTP foi encontrado: {0}',
	'noSMTPAuth'           => 'Erro: deve atribuir um nome de utilizador e senha SMTP.',
	'failedSMTPLogin'      => 'Falha ao enviar o comando AUTH LOGIN. Erro: {0}',
	'SMTPAuthUsername'     => 'Falha ao autenticar o nome de usuário. Erro: {0}',
	'SMTPAuthPassword'     => 'Falha ao autenticar a senha. Erro: {0}',
	'SMTPDataFailure'      => 'Não é possível enviar dados: {0}',
	'exitStatus'           => 'Saída do código de status: {0}',
];
