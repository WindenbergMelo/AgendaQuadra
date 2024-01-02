package br.com.agendaquadra.agendaquadra.Models;

import br.com.agendaquadra.agendaquadra.Enums.TipoAcesso;
import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.EnumType;
import jakarta.persistence.Enumerated;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;

@Entity
@Table(name = "usuario")
public class Usuario {
    
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id")
    private int id;
    @Column(name = "nome", length = 225, nullable = false)
    private String nome;
    @Column(name = "email", length = 225, nullable = false)
    private String email;
    @Column(name = "senha", length = 255, nullable = false)
    private String senha;
    @Column(name = "ativo", nullable = false)
    private int ativo;
    @Column(name = "status", length = 255, nullable = false)
    private String status;
    @Column(name = "tipo_acesso", length = 100, nullable = false)
    @Enumerated(EnumType.STRING)
    private TipoAcesso tipoacesso;

    public TipoAcesso getTipoacesso() {
        return tipoacesso;
    }

    public void setTipoacesso(TipoAcesso tipoacesso) {
        this.tipoacesso = tipoacesso;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNome() {
        return nome;
    }
    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getSenha() {
        return senha;
    }

    public void setSenha(String senha) {
        this.senha = senha;
    }

    public int getAtivo() {
        return ativo;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public String getStatus() {
        return status;
    }

    public void setAtivo(int ativo) {
        this.ativo = ativo;
    }

}