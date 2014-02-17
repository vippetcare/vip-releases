$(document).on('change', '.btn-file :file', function() {
    var input = $(this),
    numFiles = input.get(0).files ? input.get(0).files.length : 1,
    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
  $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
    var input = $(this).parents('.input-group').find(':text');
    var log = numFiles > 1 ? numFiles + ' files selected' : label;
    var helper = $(this).parents('.input-group').next();
    var releaseEnvironment = $(this).data("release-environment");
    var downloadLinkText = "https://releases.pet-records.com/released/" + $("#version").val() + "/" + releaseEnvironment + "/" + log;

    if( input.length ) {
      input.val(log);
      helper.text(downloadLinkText);
    } else {
      if( log ) alert(log);
    }
  });

  $(".date-picker").datepicker({
    format: "yyyy-mm-dd",
    todayBtn: "linked",
    orientation: "top right",
    forceParse: false,
    calendarWeeks: true,
    autoclose: true,
    todayHighlight: true
  });

  $(".vip-affix").affix({
    offset: { top: 763 }
  });

  $("#add-note").on("click", function(e) {
    e.preventDefault();
    $(addReleaseNote()).fadeIn("slow").insertBefore("#create-button");
  });

  $(".container").on("click", ".remove-note", function(e) {
    e.preventDefault();
    $(this).parents(".release-notes").remove();
  });
});

function addReleaseNote() {
  var length = $(".release-notes").length;
  var $html = $("div#outer-shell").clone();
  $html.find('.text-muted').html("Note #" + (length + 1));
  $html.find('#ticket_type_0').attr("name", "release_notes[" + length + "][ticket_type]").attr("id", "ticket_type_" + length);
  $html.find('#ticket_number_0').attr("name", "release_notes[" + length + "][ticket_number]").attr("id", "ticket_number_" + length);
  $html.find('#description_0').attr("name", "release_notes[" + length + "][description]").attr("id", "description_" + length);
  $html.find('#add-note').attr("id", "remove-note-" + length).attr("class", "btn btn-danger btn-lg pull-right remove-note");
  $html.find('#action-icon').attr("id", "action-icon-" + length).attr("class", "glyphicon glyphicon-trash");
  return $html.html();
}





