class EmailService:
    def __init__(self):
        pass

    def isValid(self, email):
        return '@' not in email

    def enviar(self, de, nome, para, assunto, mensagem):
        email = Email(config)
        email.destinatario(nome, para)
        email.assunto(assunto)
        email.mensagem(mensagem)
        email.enviar()
        
        print('E-mail enviado')

        return {
            'success': True
        }