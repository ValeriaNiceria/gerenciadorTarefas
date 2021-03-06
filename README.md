# Gerenciador de Tarefas :calendar: :pencil: :fire:

##### Projeto usando:
- CodeIgniter *versão 3.1.7*
- PHP *versão 7.0.25*
- Bootstrap *versão 4.0*
- MySQL *versão 5.7.21*


##### Algumas imagens do projeto: :point_down: :computer:

![alt text](https://raw.githubusercontent.com/ValeriaNiceria/gerenciadorTarefas/fff918c20a49087f6bd9ab7d5b59be980bca1e49/assets/img/paginas/dashboard.png)

![alt text](https://raw.githubusercontent.com/ValeriaNiceria/gerenciadorTarefas/master/assets/img/paginas/minhas%20tarefas.png)


### Rodar CodeIgniter no Ubuntu

> systemctl restart apache2

> sudo a2enmod rewrite

> sudo service apache2 restart

> sudo nano /etc/apache2/apache2.conf

```
<Directory /var/www/html/>
    AllowOverride All
</Directory>
```

> sudo service apache2 restart