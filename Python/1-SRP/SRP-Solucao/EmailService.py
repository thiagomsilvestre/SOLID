class EmailService:
    def __init__(self):
        pass

    def isValid(self, email):
        return '@' not in email

    def enviar(self, de, nome, para, assunto, mensagem):
        
        Email = Email(config)
        Email.destinatario(nome, para)
        Email.assunto(assunto)
        Email.mensagem(mensagem)
        Email.enviar()
        
        print('E-mail enviado')

        return {
            'success': True
        }