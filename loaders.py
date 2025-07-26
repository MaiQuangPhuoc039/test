import logging

from langchain_community.document_loaders import (
    PyPDFLoader,
    CSVLoader,
    WebBaseLoader
)
from langchain_unstructured import UnstructuredLoader

logger = logging.getLogger(__name__)


    
class DocumentLoader:
    def __init__(self, file_path: str):
        self.file_path = file_path
        logger.info(f"DocumentLoader initialized with file: {self.file_path}")

    def get_loader(self, file_path: str):
        if file_path.endswith(".pdf"):
            return PyPDFLoader(file_path)
        elif file_path.endswith(".csv"):
            return CSVLoader(file_path)
        elif file_path.startswith("http"):
            return WebBaseLoader(file_path)
        else:
            return UnstructuredLoader(file_path)
    def load(self):
        loader = self.get_loader(self.file_path)
        docs = loader.load()
        
        logger.info(f"Loading document from {self.file_path}")
        return docs