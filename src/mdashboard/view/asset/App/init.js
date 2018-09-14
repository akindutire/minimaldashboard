$(document).ready(function () {
  $(".sidenav").sidenav();
  $("select").formSelect();
  $(".dropdown-trigger").dropdown();
  $('.modal').modal();


  var Office = {

    get: function () {
      $('div select#Unit').formSelect();

      instance = M.FormSelect.getInstance(this);
      values = instance.getSelectedValues(this);

      url = $('div#streamOffice').attr('data-action');

      $('span#loadingOffice').css({ 'display': 'none' }).hide();

      let request = $.post(url, { isRequest: 1, unit: values[0] });

      $('div#mail_progress').css({ 'display': 'block' }).show();

      let option = "<option value=0 class='small' disabled selected>Choose Office <span class='deep-orange-text'>*</span></option>";

      request.done(function (data) {

        response = (JSON.parse(data)).msg;
        if (response.length < 1) {
          $('div#mail_progress').hide();
          $('span#loadingOffice').css({ 'display': 'block' }).html('No office');
          return null;
        }

        for (i = 0; i < response.length; i++) {
          response[i] = response[i].replace(' ', '_');
          option += "<option value=" + response[i] + ">" + response[i] + "</option>";
        }

        $('select#Office').html(option);
        $('select#Office').formSelect();
        $('div#mail_progress').hide();
        $('select#Unit').formSelect();
      });

    }
  };

  $('div select#Unit').on('change', Office.get);

});
