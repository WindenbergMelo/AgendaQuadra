package br.com.agendaquadra.agendaquadra.Controllers;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.servlet.ModelAndView;

@Controller
public class HomeController {

    @GetMapping("/agendamento")
    public ModelAndView agendamento(){
        ModelAndView mv = new ModelAndView();
        mv.setViewName("agendamento");
        return mv;
    }
}