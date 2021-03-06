let allowed = Cookies.get("agreed");
if (allowed == true) {
  function projectTracker(projectIn, status, other) {
    // let project = projectIn.toString();
    let project = "OneDrive";
    let projectStatus = Cookies.get(project);
    let jumbotronStatus = document.getElementById("status");
    let completedIcon = document.getElementById("completed");
    let workingIcon = document.getElementById("working");
    let notStartedIcon = document.getElementById("notStarted");
    if (!status) {
      if (!projectStatus) {
        Cookies.set(project, "started");
        jumbotronStatus.innerText = `You have started learning about ${project}! Your progress will be tracked and stored locally on your computer.`;
      } else if (projectStatus == "started") {
        Cookies.set(project, "learning");
        jumbotronStatus.innerText = `Welcome back! Just a reminder that your progress will be tracked and stored locally on your computer.`;
      } else if (projectStatus == "learning") {
        jumbotronStatus.innerText = `Welcome back! Let's finish up this lesson!`;
      } else if (projectStatus == "finished") {
        jumbotronStatus.innerText = `You have completed your lessons in ${project}! Nice work.`;
      }
    } else {
      Cookies.set(project, status);
      console.log(Cookies.get(project));
    }
  }
}
