  document.getElementById("custom-form").addEventListener("submit", function (event) {
    event.preventDefault();

    var name = document.getElementById("name").value;
    var number = document.getElementById("number").value;
    var userMessage = document.getElementById("message").value;

    var subject = "Free Demo Request";
    var message = "Hello Lacspace,\n\n" + userMessage + "\n\nBest Regards,\n" + number;

    var emailSubject = encodeURIComponent(subject);
    var emailBody =
      "Name: " + name + "\n" +
      "Message: " + message;

    var emailLink = "mailto:info@lacspace.com?subject=" + emailSubject + "&body=" + encodeURIComponent(emailBody);

    window.location.href = emailLink;
  });
