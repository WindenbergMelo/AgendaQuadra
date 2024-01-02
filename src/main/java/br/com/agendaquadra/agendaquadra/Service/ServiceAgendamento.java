package br.com.agendaquadra.agendaquadra.Service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import br.com.agendaquadra.agendaquadra.Models.Agenda;
import br.com.agendaquadra.agendaquadra.dao.AgendaDao;
import jakarta.transaction.Transactional;

@Service
public class ServiceAgendamento {
    
    @Autowired
    private AgendaDao agendamentoRepo;

    @Transactional
    public void ativarAgenda(int agendaId) {
        Agenda agenda = agendamentoRepo.findById(agendaId);
        if (agenda != null) {
            agenda.setAceito("confirmado");
            agendamentoRepo.save(agenda);
        }
    }

    @Transactional
    public void negarAgenda(int agendaId) {
        Agenda agenda = agendamentoRepo.findById(agendaId);
        if (agenda != null) {
            agenda.setAceito("negado");
            agendamentoRepo.save(agenda);
        }
    }
}
