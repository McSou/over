    <form method="post" action="php/contact.php" class="cd-form floating-labels">
        <fieldset>
            <legend>Account Info</legend>

            <div class="error-message">
                <p>Please enter a valid email address</p>
            </div>

            <div class="icon">
                <label class="cd-label" for="cd-name">Name</label>
                <input class="user" type="text" name="cd-name" id="cd-name" required>
            </div> 

            <div class="icon">
                <label class="cd-label" for="cd-company">Company</label>
                <input class="company" type="text" name="cd-company" id="cd-company">
            </div> 

            <div class="icon">
                <label class="cd-label" for="cd-email">Email</label>
                <input class="email error" type="email" name="cd-email" id="cd-email" required>
            </div>
        </fieldset>

        <fieldset>
            <legend>Project Info</legend>

            <div>
                <h4>Budget</h4>

                <p class="cd-select icon">
                    <select class="budget" id="cd-price" name="cd-price">
                        <option value="0">Select Budget</option>
                        <option value="50000">&lt; $5000</option>
                        <option value="5000_10000">$5000 - $10000</option>
                        <option value="10000">&gt; $10000</option>
                    </select>
                </p>
            </div> 

            <div>
                <h4>Project type</h4>

                <ul class="cd-form-list" name="cd-project" id="cd-project">
                    <li>
                        <input type="radio" name="radio-button" id="cd-radio-1" checked>
                        <label for="cd-radio-1">Web</label>
                    </li>
                        
                    <li>
                        <input type="radio" name="radio-button" id="cd-radio-2">
                        <label for="cd-radio-2">Graphisme</label>
                    </li>

                    <li>
                        <input type="radio" name="radio-button" id="cd-radio-3">
                        <label for="cd-radio-3">Movie</label>
                    </li>
                </ul>
            </div>



            <div>
                <h4>Features</h4>

                <ul class="cd-form-list">
                    <li>
                        <input type="checkbox" id="cd-checkbox-1">
                        <label for="cd-checkbox-1">Urgent</label>
                    </li>

                    <li>
                        <input type="checkbox" id="cd-checkbox-2">
                        <label for="cd-checkbox-2">Carte blanche</label>
                    </li>

                    <li>
                        <input type="checkbox" id="cd-checkbox-3">
                        <label for="cd-checkbox-3">Contraintes</label>
                    </li>
                </ul>
            </div>

            <div class="icon">
                <label class="cd-label" for="cd-textarea">Project description</label>
                <textarea class="message" name="cd-textarea" id="cd-textarea" required></textarea>
            </div>

            <div>
                <input type="submit" value="Send Message">
            </div>
        </fieldset>
    </form>
