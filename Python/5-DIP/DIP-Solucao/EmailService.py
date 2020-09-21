from .interfaces.IEmailService import IEmailService

class EmailService(IEmailService):
    def isValid(self, email: str):
        return '@' in email
    
    def enviar(self, de, nome, para, assunto, mensagem):
        # email = Email(config)
        # email.destinatario(nome, para)
        # email.assunto(assunto)
        # email.mensagem(mensagem)
        # email.enviar()
        
        print('Email enviado')