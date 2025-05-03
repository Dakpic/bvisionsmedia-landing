    <?php // The </main> tag will be closed in template files like front-page.php, index.php, page.php etc. ?>

    <footer>
        <p>&copy; 2025 BVisionsMedia. All rights reserved.</p> <?php // Static footer text from index.html ?>
    </footer>

    <!-- Video Modal -->
    <div id="videoModal" class="modal">
        <div class="modal-content">
            <div class="modal-player-wrapper"> <!-- Wrapper only for player -->
                <div id="modalVideoPlayer">
                    <!-- YouTube iframe will be inserted here -->
                </div>
            </div>
            <p class="modal-close-instruction">Click outside the video to close</p> <!-- Instruction is now a sibling -->
        </div>
    </div>

<?php // Removed closing #page div ?>

<?php wp_footer(); ?>

</body>
</html>
