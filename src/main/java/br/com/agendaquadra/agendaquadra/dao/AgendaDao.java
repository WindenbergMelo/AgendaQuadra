package br.com.agendaquadra.agendaquadra.dao;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

import br.com.agendaquadra.agendaquadra.Models.Agenda;

public interface AgendaDao extends JpaRepository<Agenda, Integer>{

    @Query("SELECT u FROM Agenda u WHERE u.id = :id")
    public Agenda findById(int id);

}