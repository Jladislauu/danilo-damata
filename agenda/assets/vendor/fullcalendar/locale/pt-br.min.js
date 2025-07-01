(function (global) {
  var ptBr = {
    code: 'pt-br',
    buttonText: {
      prev: 'Anterior',
      next: 'Próximo',
      prevYear: 'Ano anterior',
      nextYear: 'Próximo ano',
      year: 'Ano',
      today: 'Hoje',
      month: 'Mês',
      week: 'Semana',
      day: 'Dia',
      list: 'Lista',
    },
    buttonHints: {
      prev: '$0 Anterior',
      next: 'Próximo $0',
      today: function(buttonText) {
        return (buttonText === 'Dia') ? 'Hoje' :
          ((buttonText === 'Semana') ? 'Esta' : 'Este') + ' ' + buttonText.toLocaleLowerCase();
      },
    },
    viewHint: function(buttonText) {
      return 'Visualizar ' + (buttonText === 'Semana' ? 'a' : 'o') + ' ' + buttonText.toLocaleLowerCase();
    },
    weekText: 'Sm',
    weekTextLong: 'Semana',
    allDayText: 'dia inteiro',
    moreLinkText: function(n) {
      return 'mais +' + n;
    },
    moreLinkHint: function(eventCnt) {
      return `Mostrar mais ${eventCnt} eventos`;
    },
    noEventsText: 'Não há eventos para mostrar',
    navLinkHint: 'Ir para $0',
    closeHint: 'Fechar',
    timeHint: 'A hora',
    eventHint: 'Evento',
  };

  // Register locale globally
  if (typeof FullCalendar !== 'undefined') {
    FullCalendar.globalLocales = FullCalendar.globalLocales || [];
    FullCalendar.globalLocales.push(ptBr);
  }
})(typeof window !== "undefined" ? window : this);