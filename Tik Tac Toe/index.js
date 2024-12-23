function play() {
    let flag = true; 
    const buttons = document.querySelectorAll(".btn");
    const resetButton = document.querySelector(".reset");
    const resultText = document.querySelector("h2");
    const winPatterns = [
      [0, 1, 2],
      [2, 4, 6],
      [3, 4, 5],
      [6, 7, 8],
      [0, 3, 6],
      [1, 4, 7],
      [0, 4, 8],
      [2, 4, 6],
    ];
  
    buttons.forEach((button, index) => {
      button.addEventListener("click", function () {
        
        const audio = new Audio("/GameZone/Tik Tac Toe/green.mp3");
        audio.play();
  
        // Set X or O depending on the current turn
        this.innerText = flag ? "X" : "O";
        this.disabled = true;
  
        // Toggle turn
        flag = !flag;
  
        // Check for a winner or draw
        check();
      });
    });
  
    function check() {
      const boxes = Array.from(buttons);
  
      // Check for winning pattern
      for (const pattern of winPatterns) {
        const pos1 = boxes[pattern[0]].innerText;
        const pos2 = boxes[pattern[1]].innerText;
        const pos3 = boxes[pattern[2]].innerText;
  
        if (pos1 !== "" && pos1 === pos2 && pos1 === pos3) {
          setTimeout(() => {
            resultText.innerText = `Player ${pos1 === "X" ? "1" : "2"} has won!`;
            resetButton.innerText = "New Game";
            const winAudio = new Audio("wrong.mp3");
            winAudio.play();
          }, 600);
          disableAllButtons();
          return;
        }
      }
  
      // Check for draw
      const allFilled = boxes.every((box) => box.innerText !== "");
      if (allFilled) {
        setTimeout(() => {
          resultText.innerText = "DRAW!";
          const drawAudio = new Audio("/GameZone/Tik Tac Toe/wrong.mp3");
          drawAudio.play();
        }, 600);
      }
    }
  
    function disableAllButtons() {
      buttons.forEach((button) => (button.disabled = true));
    }
  
    // Reset the game
    resetButton.addEventListener("click", function () {
      buttons.forEach((button) => {
        button.innerText = "";
        button.disabled = false;
      });
      resultText.innerText = "";
      resetButton.innerText = "Reset";
      flag = true; 
    });
  }
  
  play();
  